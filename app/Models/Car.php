<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand',
        'model',
        'year',
        'color',
        'price',
        'mileage',
        'created_by',
        'updated_by',
        'deleted',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($car) {
            $car->created_by = Auth::id();
        });

        static::updating(function ($car) {
            $car->updated_by = Auth::id();
        });

        static::deleting(function ($car) {
            $car->deleted = 1;
            $car->save();
        });
    }
}
