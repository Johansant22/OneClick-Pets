<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OfertasController extends Controller
{
    public function mostrarOfertas(){
        return view('DescuentosOfertas.DescuentosOfertas');
    }
}
