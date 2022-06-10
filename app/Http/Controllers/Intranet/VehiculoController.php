<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash, Auth, Session, Mail, Redirect,DB,DateTime;
use App\Models\Vehiculo;

class VehiculoController extends Controller{

    public function listar(Request $request){
       
        $list = Vehiculo::select(DB::raw('vehiculos.*, concat_ws(" " ,c.primer_nombre,c.segundo_nombre,c.apellidos) as nombre_conductor,concat_ws(" " ,p.primer_nombre,p.segundo_nombre,p.apellidos) as nombre_propietario'))
        ->leftJoin('conductores as c', 'c.id', 'vehiculos.conductor_id')
        ->leftJoin('propietarios as p', 'p.id', 'vehiculos.propietario_id')
        ->get();

        // if(empty($list)){
        //     return "No existe relación devhiculos registrados";
        // }else{
        //     return $list;
        // }

        return view('intranet.comp-vehiculos.listar')
        ->with([ 'list ' => $list]);
        
    }
    

    public function create(Request $request){
        
        $vehiculo = Vehiculo::create($request->all());
        return response($vehiculo, 201);

    }


    
}
