<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CabezaDeFactura extends Model
{
    use HasFactory;

    protected $table = 'cabeza_de_facturas';
    protected $guarded = [];
     //Relacion a nivel de modelos 1:M con cuerpo de factura
    public function cuerpoFactura() {
        return $this->belongsTo('App\Models\CuerpoDeFactura');
    }
    //Relación 1:M con sistema de pago
    public function sistemaDePago() {
        return $this->belongsTo('App\Models\SistemaDePago');
    }
     //Relación 1:1 con Estado de pedido
    public function estadoPedido() {
        return $this->belongsTo('App\Models\EstadoDePedido');
    }

    //Relación 1:M con calificacion de servicio
    public function calificacionServicio() {
        return $this->hasMany('App\Models\CalificacionServicio');
    }

    public function user() {
        return $this->hasMany('App\Models\User');
    }

}
