<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash, Auth, Session, Mail, Redirect,DB,DateTime;
use App\Models\Vehiculo, App\Models\Marca;

class VehiculoController extends Controller{

    public function listar(Request $request){
        
        $resources=[];
        $list = Vehiculo::select(DB::raw('vehiculos.id,vehiculos.placa,vehiculos.color,vehiculos.marca_id,m.nombre_marca as marca,vehiculos.tipo_vehiculo, concat_ws(" " ,p.primer_nombre,p.segundo_nombre,p.apellidos) as nombre_propietario'))
        ->leftJoin('marcas as m', 'm.id', 'vehiculos.marca_id')
        ->leftJoin('propietarios as p', 'p.id', 'vehiculos.propietario_id')
        ->get();
        $resources['vehiculos'] = $list;
        
        return view('intranet.comp-vehiculos.listar')
        ->with([ 'resources' => $resources ]);
        
    }


    # Formulario del nuevo vehiculo
    public function nuevo_vehiculo(Request $request){
        
        $resources=[];
        $marcas = Marca::get(['id','nombre_marca']);
        $resourses['marcas'] = $marcas;
        return view('intranet.comp-vehiculos.nuevo_vehiculo')
        ->with([ 'resourses' => $resourses ]);

    }
    
    public function create(Request $request){
        
        $vehiculo = Vehiculo::create($request->all());
        return response($vehiculo, 201);

    }


    
}
