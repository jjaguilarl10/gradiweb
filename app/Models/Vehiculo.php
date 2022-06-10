<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vehiculo extends Model
{
    protected $fillable = [
        'placa',
        'color',
        'marca',
        'tipo_vehiculo',
        'conductor_id',
        'propietario_id'
    ];
    protected $primaryKey = "id";
    public $timestamps    = true;

}
