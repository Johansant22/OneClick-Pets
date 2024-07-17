<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Tercero;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Psy\CodeCleaner\ReturnTypePass;

class InicioSesionController extends Controller
{
/* public function mostrarFormularioInicioSesion()
    {
        return view('InicioSesion.InicioS');
    }

    public function inicioSesion(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials, $request->remember)) {
            $request->session()->regenerate();
            return redirect()->route('inicio.create'); // Redirige a la página de inicio
        }

        return back()->withErrors([
            'email' => 'El usuario no está registrado',
        ]);
    }

    public function cerrarSesion(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('inicio.create');
    } */
    public function create(){
        return view('InicioSesion.InicioS');
    }

    public function registro(Request $request){


        $request->validate([
        'Nombre1' => 'required',
            'Apellido1' => 'required',
            'Direccion' => 'required',
            'Num_identificacion' => 'required',
            'Correo' => 'required|email',
            'Telefono' => 'required',
            'tipo_documento_id' => 'required|integer',
            'ciudad_id' => 'required|integer',
            'departamento_id' => 'required|integer',
            'tipo_tercero_id' => 'required|integer',
            'genero_id' => 'required|integer',
            'contrasena' => 'required|min:6|confirmed',
            'terms' => 'accepted',
        ]);

        $tercero = new Tercero();
        // Crear un nuevo registro de Tercero en la base de datos
        $tercero->Nombre1 = $request->Nombre1;
        $tercero->Nombre2 = $request->Nombre2;
        $tercero->Apellido1 = $request->Apellido1;
        $tercero->Apellido2 = $request->Apellido2;
        $tercero->Direccion = $request->Direccion;
        $tercero->Num_identificacion = $request->Num_identificacion;
        $tercero->Correo = $request->Correo;
        $tercero->Telefono = $request->Telefono;
        $tercero->tipo_documento_id = $request->tipo_documento_id;
        $tercero->ciudad_id = $request->ciudad_id;
        $tercero->departamento_id = $request->departamento_id;
        $tercero->tipo_tercero_id = $request->tipo_tercero_id;
        $tercero->genero_id = $request->genero_id;
        $tercero->contrasena = Hash::make($request->contrasena);

        $tercero->save();

        Auth::iniciarSesion($tercero);

        return redirect(route('prueba-log'));

    }


}
