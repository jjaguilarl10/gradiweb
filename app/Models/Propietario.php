<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Propietario extends Model{
    protected $table      = "propietarios";
    protected $fillable = [
        'identificacion',
        'primer_nombre',
        'segundo_nombre',
        'apellidos',
        'direccion',
        'telefono',
        'ciudad'
    ];
    protected $primaryKey = "id";
    public $timestamps    = true;
}
