<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evaluacion extends Model
{
    use HasFactory;

    protected $table = 'evaluaciones';

    // Define los campos que se pueden asignar masivamente
    protected $fillable = [
        'nombre',
        'programa',
        'fecha_reportada',
        'nivel_academico',
        'institucion_educativa',
        'telefono',
        'criterio_uno',
        'criterio_dos',
        'criterio_tres',
        'criterio_cuatro',
        'criterio_cinco',
        'criterio_seis',
        'criterio_siete',
        'criterio_ocho',
        'observaciones',
    ];
}