<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tercero extends Model
{
    use HasFactory;
    protected $table = 'terceros';

    protected $fillable = [
        'Nombre1', 'Nombre2', 'Apellido1', 'Apellido2', 'Direccion',
        'Num_identificacion', 'Correo', 'Telefono', 'tipo_documento_id',
        'ciudad_id', 'departamento_id', 'tipo_tercero_id', 'genero_id', 'contrasena'
    ];

    protected $guarded = [];
    //Relacion a nivel de modelos 1:1 con:
    //tipo tercero, tipo documento, departamento, ciudad, tipo_pqrs y genero
    public function tipo_tercero() {
        return $this->hasOne('App\Models\TipoTercero');
    }

    public function tipo_documento() {
        return $this->hasOne('App\Models\TipoDocumento');
    }

    public function departamento() {
        return $this->hasOne('App\Models\Departamento');
    }

    public function ciudad() {
        return $this->hasOne('App\Models\Ciudad');
    }

    public function genero() {
        return $this->hasOne('App\Models\Genero');
    }

    //Relaciones a nivel de modelo 1:M
    //Con: empresa

    public function empresa() {
        return $this->belongsTo('App\Models\Empresa');
    }

    public function inventario() {
        return $this->belongsTo('App\Models\Inventario');
    }

    // Relación a nivel de modelo N:M
    //Con tipo_pqrs
    public function tipo_pqrs() {
        return $this->belongsToMany(TipoDePqr::class, 'tercero_tipo_pqrs'.'tercero_id','tipo_de_pqrs_id');
    }
}
