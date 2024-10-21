<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\UserAdminModel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 

class RegisterAdminController extends Controller
{
    public function create()
    {
    return view("authadmin.registeradmin");
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required',
            'correo' => 'required|email',
            'contraseña' => 'required|confirmed',
            'numeroEmpleado' => 'required',
            'puesto' => 'required',
            'departamento' => 'required',
            'numeroTelefono' => 'required',
        ]);        
    
        $user = UserAdminModel::create([
            'nombre' => $request->nombre, // Asegúrate de que sea 'nombre'
            'correo' => $request->correo,
            'contraseña' => Hash::make($request->contraseña),
            'numeroEmpleado' => $request->numeroEmpleado,
            'puesto' => $request->puesto,
            'departamento' => $request->departamento,
            'numeroTelefono' => $request->numeroTelefono,
        ]);        
    
        Auth::login($user);
        return redirect()->route('dashboard');
    }
}