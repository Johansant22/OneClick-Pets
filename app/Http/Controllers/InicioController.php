<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InicioController extends Controller
{
    public function index(){
        $gravatarUrl = null; //Muestra un icono predeterminao o precargado
// se utiliza para verificar o autenticar el usuario
        if (Auth::check()){
            $initials = strtoupper(substr(Auth::user()->name, 0, 1));
            $gravatarUrl = "https://www.gravatar.com/avatar/" . md5(Auth::user()->email) . "?d=retro&s=200";
        }

        return view('Pagina_inicio.inicio', compact('gravatarUrl'));
    }


   // public function index(){
     //   return view('RegistroUsuario.RegUsuario');
   // }

}
