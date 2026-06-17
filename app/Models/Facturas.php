<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use app\Models\Cliente;

class Facturas extends Model
{
    /** @use HasFactory<\Database\Factories\FacturasFactory> */
    use HasFactory;
    protected $fillable = [
        'cliente_id',
        'provincia_id',
        'monto_total',
        'fecha_emision',
        'fecha_vencimiento',
        'estado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Clientes::class, 'cliente_id');
    }
}
