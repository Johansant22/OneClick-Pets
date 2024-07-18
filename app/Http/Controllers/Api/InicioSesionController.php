<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Tercero;
use App\Models\TipoTercero;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class InicioSesionController extends Controller
{

    public function create()
    {
        return view('InicioSesion.InicioS');
    }

    public function registro(Request $request)
    {
        // Validación de los datos
        $request->validate([
            'Nombre1' => 'required',
            'Apellido1' => 'required',
            'Direccion' => 'required',
            'Num_identificacion' => 'required',
            'Correo' => 'required|email',
            'Telefono' => 'required',
            'contrasena' => 'required|min:6|confirmed',
            'terms' => 'accepted',
        ]);

        // Crear un nuevo registro de Tercero en la base de datos
        $tercero = new Tercero();
        $tercero->Nombre1 = $request->Nombre1;
        $tercero->Nombre2 = $request->Nombre2;
        $tercero->Apellido1 = $request->Apellido1;
        $tercero->Apellido2 = $request->Apellido2;
        $tercero->Direccion = $request->Direccion;
        $tercero->Num_identificacion = $request->Num_identificacion;
        $tercero->Correo = $request->Correo;
        $tercero->Telefono = $request->Telefono;
        $tercero->contrasena = Hash::make($request->contrasena);

        $tercero->save();

        // Iniciar sesión automáticamente después del registro
        Auth::login($tercero);

        return redirect(route('prueba-log'));
    }

    public function login(Request $request)
    {
        // Validación de los datos
        $credentials = $request->validate([
            'Correo' => 'required|email',
            'contrasena' => 'required|min:6',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt(['Correo' => $credentials['Correo'], 'password' => $credentials['contrasena']])) {
            $request->session()->regenerate();
            return redirect()->intended('privada');
        }

        return back()->withErrors([
            'Correo' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
        ])->onlyInput('Correo');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('formulario-iniciar-sesion'));
    }


}
