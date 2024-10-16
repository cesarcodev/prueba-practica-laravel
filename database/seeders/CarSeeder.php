<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'brand' => 'Toyota',
                'model' => 'Corolla',
                'year' => 2020,
                'color' => 'Blanco',
                'price' => 20000.00,
                'mileage' => 15000,
                'created_by' => null,
                'updated_by' => null,
                'deleted' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'brand' => 'Honda',
                'model' => 'Civic',
                'year' => 2019,
                'color' => 'Negro',
                'price' => 18000.00,
                'mileage' => 20000,
                'created_by' => null,
                'updated_by' => null,
                'deleted' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'brand' => 'Ford',
                'model' => 'Focus',
                'year' => 2018,
                'color' => 'Rojo',
                'price' => 17000.00,
                'mileage' => 25000,
                'created_by' => null,
                'updated_by' => null,
                'deleted' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'brand' => 'Chevrolet',
                'model' => 'Malibu',
                'year' => 2021,
                'color' => 'Azul',
                'price' => 22000.00,
                'mileage' => 10000,
                'created_by' => null,
                'updated_by' => null,
                'deleted' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'brand' => 'Nissan',
                'model' => 'Altima',
                'year' => 2017,
                'color' => 'Gris',
                'price' => 16000.00,
                'mileage' => 30000,
                'created_by' => null,
                'updated_by' => null,
                'deleted' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'brand' => 'BMW',
                'model' => 'Serie 3',
                'year' => 2022,
                'color' => 'Negro',
                'price' => 35000.00,
                'mileage' => 5000,
                'created_by' => null,
                'updated_by' => null,
                'deleted' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'brand' => 'Audi',
                'model' => 'A4',
                'year' => 2020,
                'color' => 'Blanco',
                'price' => 33000.00,
                'mileage' => 12000,
                'created_by' => null,
                'updated_by' => null,
                'deleted' => 0,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
