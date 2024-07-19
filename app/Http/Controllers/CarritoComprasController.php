<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoComprasController extends Controller
{
    public function carritoCompras(){
        return view('CarroCompras.CarroCompras');
    }
}
