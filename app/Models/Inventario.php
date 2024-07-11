<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventario extends Model
{
    use HasFactory;
    protected $table = 'inventarios';
    protected $guarded = [];

    //Relaciones a nivel de modelo 1:M
    //Con: tercero

    public function tercero() {
        return $this->hasMany('App\Models\Tercero');
    }

    public function producto() {
        return $this->hasMany('App\Models\Producto');
    }
    //Relacion a nivel de modelos 1:M con catalogo
    public function catalogo() {
        return $this->belongsTo('App\Models\Catalogo');
    }
     //Relaciones a nivel de modelo 1:M
    //con la tabla movimientos

    public function movimientos() {
        return $this->hasMany('App\Models\Movimiento');
    }
    //Relación 1:M con cuerpo factura
    public function cuerpoFactura() {
        return $this->belongsTo('App\Models\CuerpoDeFactura');
    }

}
