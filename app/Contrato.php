<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'idPersona',
        'idTrabajo',
        'idPrecio',
        'idUser',
        'dateDelivery',
        'advance',
        'observation',
        'state'
    ];

    public function persona()
    {
        return $this->belongsTo('App\Persona', 'idPersona');
    }

    public function trabajo()
    {
        return $this->belongsTo('App\Trabajo', 'idTrabajo');
    }

    public function precio()
    {
        return $this->belongsTo('App\Precio', 'idPrecio');
    }

    public function usuario()
    {
        return $this->belongsTo('App\User', 'idUser');
    }
}
