<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware('auth')->group(function () {

    // Rutas para Perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Rutas para la gestión de automoviles
    Route::get('/cars', [CarController::class, 'index'])->name('cars');
    Route::get('/car/create', [CarController::class, 'create'])->name('car/create');
    Route::post('/car/save', [CarController::class, 'store'])->name('car/save');
    Route::get('/car/edit/{id}', [CarController::class, 'edit'])->name('car/edit');
    Route::put('/car/edit/{id}', [CarController::class, 'update'])->name('car/update');
    Route::get('/car/delete/{id}', [CarController::class, 'destroy'])->name('car/delete');
});


require __DIR__.'/auth.php';
