<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;
    protected $table = 'empresas';
    protected $fillable = [
        'razon_social',
        'nit',
        'objeto_social',
        'user_id',
    ];
    protected $guarded = [];

    //Relaciones a nivel de modelo 1:M
    //Con: tercero

    public function user() {
        return $this->hasMany('App\Models\User');
    }
}
