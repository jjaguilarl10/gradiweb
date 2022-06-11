<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash, Auth, Session, Mail, Redirect,DB,DateTime;
use App\Models\Vehiculo, App\Models\Marca, App\Models\Propietario;

class VehiculoController extends Controller{

    private $xhr_response;
    public function __construct(){
  
        $xhr_response = [];
        $xhr_response['code'] = 402;
        $xhr_response['status'] = "denied";
        $xhr_response['data'] = [];
		$xhr_response['url'] = "";
	 
	} 

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

    # filtro de vehiculos
    public function filter(Request $request){
        if($request){
            
            $filter_="";
            if(!empty($request->data_placa) || !empty($request->data_cedula) || !empty($request->data_nombre) || !empty($request->data_apellidos) ){
                $filter_ = $filter_." vehiculos.placa like '%".$request->data_placa."%' and p.identificacion like '%".$request->data_cedula."%' and p.primer_nombre like '%".$request->data_nombre."%' and p.apellidos like '%".$request->data_apellidos."%' ";
            }else{
                $filter_ = $filter_." vehiculos.placa not in ('')";
            }
            
            $result = Vehiculo::select(DB::raw('vehiculos.id,vehiculos.placa,vehiculos.color,vehiculos.marca_id,m.nombre_marca as marca,vehiculos.tipo_vehiculo, concat_ws(" " ,p.primer_nombre,p.segundo_nombre,p.apellidos) as nombre_propietario'))
            ->join('marcas as m', 'm.id', 'vehiculos.marca_id')
            ->join('propietarios as p', 'p.id', 'vehiculos.propietario_id')
            ->whereRaw($filter_)
            ->get();
            $resources['vehiculos'] = $result;

            return view('intranet.comp-vehiculos.filter-vehiculos')
            ->with([ 
                "resources" => $resources, 
            ]);

        }else{
            
        }
    }

    # Formulario del nuevo vehiculo
    public function nuevo_vehiculo(Request $request){
        
        $resources=[];
        
        $marcas = Marca::get(['id','nombre_marca']);
        $resourses['marcas'] = $marcas;
        $propietarios = Propietario::get(['id','identificacion','primer_nombre','segundo_nombre','apellidos']);
        $resourses['propietarios'] = $propietarios;
        
        return view('intranet.comp-vehiculos.nuevo_vehiculo')
        ->with([ 'resourses' => $resourses ]);

    }
    
    public function create(Request $request){
        
        # return  $request;
        if(!empty($request)){
            
            $fvh = Vehiculo::wherePlaca($request->placa)->first();
            if(!empty($fvh)){

            }else{
                
                if($request->marca_id == 0 || $request->tipo_vehiculo == "" ){
                    $this->xhr_response['code'] = 402;
                    $this->xhr_response['message'] = "Debe seleccionar el tipo de vehiculo o la marca del mismo";
                    return $this->xhr_response;
                }
                if($request->propietario_id == 0){
                    $this->xhr_response['code'] = 402;
                    $this->xhr_response['message'] = "Debe especificar el propietario del vehiculo a registrar";
                    return $this->xhr_response;
                }

                try{ 
                    $new_vh = new vehiculo;
                    $new_vh->placa = $request->placa;
                    $new_vh->color = $request->color;
                    $new_vh->marca_id = $request->marca_id;
                    $new_vh->tipo_vehiculo = $request->tipo_vehiculo;
                    $new_vh->propietario_id = $request->propietario_id;
                    if($new_vh->save()){
                        $this->xhr_response['code'] = 200;
                        $this->xhr_response['message'] = "Informacion nuevo vehiculo ha sido registrada correctamente";
                        $this->xhr_response['url'] = 'intranet/vehiculos/listar';
                    }else{
                        $this->xhr_response['code'] = 402;
                        $this->xhr_response['message'] = "Error al registrar el nuevo vehiculo en estos momentos intentlo mas tarde";
                    }
                }catch(\Throwable $th){
                    $this->xhr_response['code'] = 500;
                    $this->xhr_response['message'] = $th->getMessage();
                   
                }
                
            }
        }else{

        }
        return  $this->xhr_response;  
    }


    # Permite generar el reporte de los vehiculos
    public function reporte_vehiculos_marcas (Request $request){
       
        $resources=[];
        $list = Vehiculo::select(DB::raw('lower(m.nombre_marca) as nombre_marca,count(m.id) as cantidad_marca'))
        ->join('marcas as m', 'm.id', 'vehiculos.marca_id')
        ->join('propietarios as p', 'p.id', 'vehiculos.propietario_id')
        ->groupBy('m.nombre_marca')
        ->get();
        $resources['vehiculos'] = $list;
        
        return view('intranet.comp-vehiculos.reporte_marcas')
        ->with([ 'resources' => $resources ]);
        
    }


    
}
