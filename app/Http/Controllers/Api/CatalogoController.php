<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CatalogoController extends Controller
{
    public function create(){
        return view('Catalogo.Catalogo');
    }
    public function prueba(){
        return view('prueba');
    }
}
