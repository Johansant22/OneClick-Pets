<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CatalogoController extends Controller
{

    public function create(){
        $gravatarUrl = null;

        if (Auth::check()){
            $initials = strtoupper(substr(Auth::user()->name, 0, 1));
            $gravatarUrl = "https://www.gravatar.com/avatar/" . md5(Auth::user()->email) . "?d=retro&s=200";
        }
        return view('Catalogo.Catalogo', compact('gravatarUrl'));
    }




}
