<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Marca extends Model{
    protected $fillable = [
        'nombre_marca'        
    ];
    protected $primaryKey = "id";
    public $timestamps    = true;
}
