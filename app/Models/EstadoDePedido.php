<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstadoDePedido extends Model
{
    use HasFactory;
    protected $table = 'estado_de_pedidos';
    protected $guarded = [];
     //Relacion a nivel de modelos 1:1 con cabeza de factura
    public function cabezaFactura() {
        return $this->hasOne('App\Models\CabezaDeFactura');
    }
}
