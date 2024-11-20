<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegistroservController extends Controller
{
    public function create()
    {
        $dependencias = DB::table('ctcatdependencia')->get();
        return view("forms.registroserv", compact('dependencias'));
    }

    public function store(Request $request)
    {
                $validatedData = $request->validate
                ([
                    'ctcatdependencia_id' => 'required|exists:ctcatdependencia,id',
                    'nombreDependencia' => 'required|string|max:50',
                   /*  'correoElectronico' => 'required|string|max:255',
                    'direccionDependencia' => 'nullable|string|max:255', */
                    'telefonoDependencia' => 'nullable|string|max:15',
                    'areaAdscripcion' => 'nullable|string|max:255',
                    'nombreJefeInmediato' => 'nullable|string|max:255',
                    'cargoJefeInmediato' => 'nullable|string|max:255',
                    'nombreProyecto' => 'nullable|string|max:255',
                    'fechaInicio' => 'nullable|date',
                    'fechaFin' => 'nullable|date|after_or_equal:fechaInicio',
                ]);

                $dependencia = DB::table('ctcatdependencia')
                ->where('id', $validatedData['ctcatdependencia_id'])
                ->first(['nombreDependencia', 'correoElectronico', 'numTelefono']);

                if(!$dependencia)
                {
                    return redirect()->back()->withErrors(['ctcatdependencia_id' => 'Dependencia no encontrada']);
                }
                

                DB::table('dtregistrodependencia')->insert([
                    'ctcatdependencia_id' => $validatedData['ctcatdependencia_id'],
                    'nombreDependencia' => $dependencia->nombreDependencia,
                    'correoElectronico' => $dependencia->correoElectronico,
                    'telefonoDependencia' => $dependencia->numTelefono,
                    'direccionDependencia' => $validatedData['direccionDependencia'],
                    'areaAdscripcion' => $validatedData['areaAdscripcion'],
                    'nombreJefeInmediato' => $validatedData['nombreJefeInmediato'],
                    'cargoJefeInmediato' => $validatedData['cargoJefeInmediato'],
                    'nombreProyecto' => $validatedData['nombreProyecto'],
                    'fechaInicio' => $validatedData['fechaInicio'],
                    'fechaFin' => $validatedData['fechaFin'],
                ]);

                return redirect()->route('infomacioncomp')->with('success','Informacion guardada correctamente');
        
    }
}
