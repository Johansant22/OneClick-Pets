<?php

use App\Http\Controllers\api\InicioSesionController;
use App\Http\Controllers\Api\TerceroController;
use App\Http\Controllers\InicioController;
use App\Models\Tercero;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Ruta para el home de la página
Route::resource('inicio', InicioController::class)->names('inicio');
Route::get('/formulario_registro',[TerceroController::class, 'create'])->name('registro.create');
//Route::post('/formulario_registro',[TerceroController::class, 'store'])->name('registro.store');
//Ruta para iniciar sesion
Route::get('/formulario-inicio-sesion',[InicioSesionController::class, 'create'])->name('formulario-iniciar-sesion');
Route::post('/validar-registro', [InicioSesionController::class,'registro'])->name('validar-registro');
Route::post('/inicia-sesion', [InicioSesionController::class,'iniciarSesion'])->name('inicia-sesion');
Route::get('/cerrar-sesion', [InicioSesionController::class,'cerrarSesion'])->name('cerrar-sesion');
Route::get('/prueba-log', [InicioSesionController::class,'pruebaLog'])->name('prueba-log');
