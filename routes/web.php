<?php

use App\Http\Controllers\Api\CatalogoController;
use App\Http\Controllers\api\InicioSesionController;
use App\Http\Controllers\Api\TerceroController;
use App\Http\Controllers\AyudaController;
use App\Http\Controllers\CarritoComprasController;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\OfertasController;
use App\Http\Controllers\PerfilController;
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
Route::post('/inicia-sesion', [InicioSesionController::class,'login'])->name('inicia-sesion');
Route::get('/cerrar-sesion', [InicioSesionController::class,'logout'])->name('cerrar-sesion');
// vista de login
Route::view('/login','InicioSesion.InicioS')->name('login');
//rutas protegidas si el usuario no está registrado
Route::view('/privada', 'secret')->middleware('auth')->name('privada');
Route::get('/perfil', [PerfilController::class, 'create'])->middleware('auth')->name('perfil');
Route::get('/ayuda',[AyudaController::class, 'ayuda'])->middleware('auth')->name('ayuda');





//Ruta de catalogo
Route::get('/catalogo',[CatalogoController::class, 'create'])->name('catalogo');
//ruta de ofertas y descuentos
Route::get('/ofertas',[OfertasController::class, 'mostrarOfertas'])->name('ofertas');
//Ruta de carrito de compras
Route::get('/carrito-compras',[CarritoComprasController::class, 'carritoCompras'])->name('carrito-compras');

