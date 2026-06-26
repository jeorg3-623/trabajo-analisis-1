<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comprobantes;

class Compra extends Model
{
    /** @use HasFactory<\Database\Factories\ComprasFactory> */
    use HasFactory;
    protected $fillable = [
        'numero_compra',
        'fecha_compra',
        'total_compra',
        'forma_pago',
    ];

    public function comprobantes()
    {
        return $this->hasMany(Comprobantes::class, 'compra_id');
    }

}
