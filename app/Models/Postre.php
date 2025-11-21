<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postre extends Model
{
    use HasFactory;

    protected $table = 'postres';

    protected $fillable = [
        'nombre',
        'descripcion',
        'precio',
        'fecha_creacion',
    ];

    protected $casts = [
        'fecha_creacion' => 'date',
    ];
}
