<?php

use App\Http\Controllers\Api\TerceroController;
use App\Http\Controllers\InicioController;
use App\Models\Tercero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//Ruta para el home de la página
Route::resource('inicio', InicioController::class)->names('inicio');

//Route::resource('registro', TerceroController::class)->names('registro');
//rutas para el formulario
Route::get('/formulario_registro',[TerceroController::class, 'create'])->name('registro.create');
Route::post('/formulario_registro',[TerceroController::class, 'show'])->name('registro.show');
Route::resource('inicio', TerceroController::class);
