<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Comprobantes;

class Usuario extends Model
{
    /** @use HasFactory<\Database\Factories\UsuariosFactory> */
    use HasFactory;
    protected $fillable = [
        'nombre_usuario',
        'email_usuario',
        'contrasena_usuario',
        'rol_usuario',
        'sucursal_id',
    ];

    public function comprobantes()
    {
        return $this->hasMany(Comprobantes::class, 'usuario_id');
    }
}
