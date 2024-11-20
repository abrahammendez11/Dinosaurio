<?php

namespace App\Http\Controllers;

use App\Models\Evaluacion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvaluacionController extends Controller
{
    public function store(Request $request)
    {
        $evaluacion = new Evaluacion();
        $evaluacion->nombre = $request->input('nombre');
        $evaluacion->programa = $request->input('programa');
        $evaluacion->fecha_reportada = date('Y-m-d', strtotime(str_replace('/', '-', $request->input('fechaReporte'))));
        $evaluacion->nivel_academico = $request->input('nivelAcademico');
        $evaluacion->institucion_educativa = $request->input('institucionEducativa');
        $evaluacion->telefono = $request->input('telefono');
        $evaluacion->criterio_uno = $request->input('criterioUno');
        $evaluacion->criterio_dos = $request->input('criterioDos');
        $evaluacion->criterio_tres = $request->input('criterioTres');
        $evaluacion->criterio_cuatro = $request->input('criterioCuatro');
        $evaluacion->criterio_cinco = $request->input('criterioCinco');
        $evaluacion->criterio_seis = $request->input('criterioSeis');
        $evaluacion->criterio_siete = $request->input('criterioSiete');
        $evaluacion->criterio_ocho = $request->input('criterioOcho');
        $evaluacion->observaciones = $request->input('observaciones');
        $evaluacion->save();
    
        return redirect()->back()->with('success', 'Evaluación guardada correctamente.');
    }

}
