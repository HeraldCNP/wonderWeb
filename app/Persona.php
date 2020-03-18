<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $fillable = [
        'name',
        'lastname',
        'phone',
        'address',
        'face',
        'idEmpresa',
        'idUser'
    ];

    public function empresa()
    {
        return $this->belongsTo('App\Empresa', 'idEmpresa');
    }

    public function usuario()
    {
        return $this->belongsTo('App\User', 'idUser');
    }
}
