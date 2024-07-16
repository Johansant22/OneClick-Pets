<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Tercero;
use Illuminate\Http\Request;

class TerceroController extends Controller
{

   //Muestra el formulario de registro
    public function create(){
        return view('RegistroUsuario.RegUsuario');
    }


    //Procesar el registro de usuario
    public function store(Request $request){
         // Validar los datos del formulario
        $request->validate([
            'Nombre1' => 'required',
            'Apellido1' => 'required',
            'Direccion' => 'required',
            'Num_identificacion' => 'required',
            'Correo' => 'required|email',
            'Telefono' => 'required',
            'tipo_documento_id' => 'required',
            'ciudad_id' => 'required',
            'departamento_id' => 'required',
            'tipo_tercero_id' => 'required',
            'genero_id' => 'required',
            'pwd' => 'required|min:6',
            'cpwd' => 'required|same:pwd',
            'terms' => 'accepted',
        ]);

        // Crear un nuevo registro de Tercero en la base de datos
        Tercero::create($request->all());

        // Redirigir a la página de inicio u otra vista
        return redirect()->route('inicio.index');
    }



}
