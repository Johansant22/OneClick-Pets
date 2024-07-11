<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CalificacionServicio extends Model
{
    use HasFactory;
    protected $table = 'calificacion_servicios';
    protected $guarded = [];
    //Relación 1:M con cabeza factura
    public function sistemaDePago() {
        return $this->belongsTo('App\Models\CabezaDeFactura');
    }

    public function controlComentarios() {
        return $this->hasMany('App\Models\ControlDeComentario');
    }

}
