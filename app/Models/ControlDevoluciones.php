<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlDevoluciones extends Model
{
    use HasFactory;
    protected $table = 'control_devoluciones';
    protected $guarded = [];
     //Relacion a nivel de modelos 1:M con movimientos
    public function movimientos() {
        return $this->belongsTo('App\Models\Movimiento');
    }
}
