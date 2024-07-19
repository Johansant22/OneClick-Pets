<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PhpParser\Node\Stmt\Else_;

class InicioSesionController extends Controller
{

    public function create()
    {
        return view('InicioSesion.InicioS');
    }

    public function registro(Request $request)
    {
        // Validación de los datos


        // Crear un nuevo registro de Tercero en la base de datos
        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->Direccion = $request->Direccion;
        $user->Num_identificacion = $request->Num_identificacion;
        $user->Telefono = $request->Telefono;
        $user->password = Hash::make($request->password);

        $user->save();

        // Iniciar sesión automáticamente después del registro
        Auth::login($user);

        return redirect(route('catalogo'));
    }

    public function login(Request $request){
        //Validación de credenciales
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        // Recordar el usuario
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('inicio.index'));
        } else {
            return back()->withErrors([
                'email' => 'El correo o la contraseña no son correctos.',
            ])->onlyInput('email');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('formulario-iniciar-sesion'));
    }


}
