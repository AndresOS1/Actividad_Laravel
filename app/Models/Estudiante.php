<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $table = "estudiante";
    protected $fillable = [
        'nombre_Estudiante',
        'apellido_Estudiante',
        'direccion',
        'Telefono',
        'tipo_doc',
        'num_doc',
    ];
}
