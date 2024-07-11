<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlDeComentario extends Model
{
    use HasFactory;
    protected $table = 'control_de_comentarios';
    protected $guarded = [];
    //Relación 1:M con calificación servicio
    public function calificacionServicio() {
        return $this->belongsTo('App\Models\CalificacionServicio');
    }
}
