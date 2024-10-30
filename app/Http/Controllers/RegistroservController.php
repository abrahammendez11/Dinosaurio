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
                    'direccionDependencia' => 'nullable|string|max:80',
                    'telefonoDependencia' => 'nullable|string|max:15',
                ]);

                $nombreDependencia = DB::table('ctcatdependencia')
                ->where('id', $validatedData['ctcatdependencia_id'])
                ->value('nombreDependencia');

                DB::table('dtregistrodependencia')->insert([
                    'ctcatdependencia_id' => $validatedData['ctcatdependencia_id'],
                    'nombreDependencia' => $nombreDependencia,
                    'direccionDependencia' => $validatedData['direccionDependencia'],
                    'telefonoDependencia' => $validatedData['telefonoDependencia'],
                ]);

                return  redirect()->route('infomacioncomp')->with('success','Informacion guardada correctamente');
        
    }
}
