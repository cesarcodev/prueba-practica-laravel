<?php

namespace App\Http\Controllers;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carros = Car::where('deleted', 0)
                       ->orderBy('id', 'asc')
                       ->get();

        return view('cars.cars', compact('carros'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validation = $request->validate([
            'brand' => 'required|max:255',
            'model' => 'required|max:255',
            'price' => 'required|numeric',
            'year' => 'required|numeric',
            'color' => 'required|max:255',
            'mileage' => 'required|numeric'
        ]);
        $data = Car::create($validation);

        if ($data) {
            session()->flash('success', 'Carro agregado correctamente');
            return redirect(route('cars'));
        } else {
            session()->flash('error', 'Algún problema sucedio, intento nuevamente');
            return redirect(route('cars.create'));
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
