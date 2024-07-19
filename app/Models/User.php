<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'Direccion',
        'Num_identificacion',
        'Telefono',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function empresa() {
        return $this->belongsTo('App\Models\Empresa');
    }

    public function inventario() {
        return $this->belongsTo('App\Models\Inventario');
    }

    public function cabezaFactura() {
        return $this->belongsTo('App\Models\CabezaDeFactura');
    }

    // Relación a nivel de modelo N:M
    //Con tipo_pqrs
    public function tipo_pqrs() {
        return $this->belongsToMany(TipoDePqr::class, 'tercero_tipo_pqrs'.'tercero_id','tipo_de_pqrs_id');
    }
}
