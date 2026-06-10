<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Producto;

class Sucursal extends Model
{
    /** @use HasFactory<\Database\Factories\SucursalFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre_sucursal',
        'direccion_sucursal',
    ];
}
