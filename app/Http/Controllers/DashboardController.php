<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function show()
    {
        $total = Car::where('deleted', 0)->count();

        $carrosPorMarca = Car::selectRaw('brand, COUNT(*) as total')
                               ->where('deleted', 0)
                               ->groupBy('brand')
                               ->orderBy('brand')
                               ->get();

        $marcas = $carrosPorMarca->pluck('brand')->toArray();
        $cantidades = $carrosPorMarca->pluck('total')->toArray();

        return view('dashboard', compact('total','carrosPorMarca','marcas','cantidades'));
    }
}
