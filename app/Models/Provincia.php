<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Cliente;

class Provincia extends Model
{
    /** @use HasFactory<\Database\Factories\ProvinciaFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre',
        'municipio',
        'codigo_postal',
        'departamento/partido',
    ];

    public function facturas()
    {
        return $this->hasMany(Facturas::class, 'provincia_id');
    }
    
}
