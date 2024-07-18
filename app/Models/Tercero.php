<?php

namespace App\Models;

use Illuminate\Auth\Events\Authenticated;
use Illuminate\Auth\Middleware\Authenticate;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tercero extends Authenticatable
{
    use HasFactory;
    protected $table = 'terceros';

    protected $fillable = [
        'Nombre1', 'Nombre2', 'Apellido1', 'Apellido2', 'Direccion',
        'Num_identificacion', 'Correo', 'Telefono',
        'contrasena'
    ];

    protected $guarded = [];

    protected $hidden = [
        'contrasena',
    ];


    // Método para obtener la contraseña (el campo se llama "contrasena" en lugar de "password")
    public function getAuthPassword()
    {
        return $this->contrasena;
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
