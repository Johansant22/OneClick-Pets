<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoDePqr extends Model
{
    use HasFactory;
    protected $table = 'tipo_de_pqrs';
    protected $guarded = [];
    // Relación a nivel de modelo N:M
    //Con tipo_pqrs
    public function tercero() {
        return $this->belongsToMany(Tercero::class, 'tercero_tipo_pqrs'.'tipo_de_pqrs_id', 'tercero_id');
    }
}
