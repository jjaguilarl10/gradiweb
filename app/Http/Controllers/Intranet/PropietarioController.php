<?php

namespace App\Http\Controllers\Intranet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Hash, Auth, Session, Mail, Redirect,DB,DateTime;
use App\Models\Vehiculo, App\Models\Marca, App\Models\Propietario;

class PropietarioController extends Controller{

    private $xhr_response;
    public function __construct(){
  
        $xhr_response = [];
        $xhr_response['code'] = 402;
        $xhr_response['status'] = "denied";
        $xhr_response['data'] = [];
		$xhr_response['url'] = "";
	 
	}

    # filtro de Propietarios
    public function filter(Request $request){
        if($request){
            
            $filter_="";
            if(!empty($request->data_cedula) || !empty($request->data_nombre) || !empty($request->data_apellidos) ){
                $filter_ = $filter_." propietarios.identificacion like '%".$request->data_cedula."%' and propietarios.primer_nombre like '%".$request->data_nombre."%' and propietarios.apellidos like '%".$request->data_apellidos."%' ";
            }else{
                $filter_ = $filter_." propietarios.identificacion not in (0)";
            }
            
            $result = Propietario::select(DB::raw('propietarios.id,propietarios.identificacion as cedula,propietarios.primer_nombre,propietarios.segundo_nombre,propietarios.apellidos,propietarios.direccion,propietarios.celular,v.placa'))
            ->leftJoin('vehiculos as v', 'v.propietario_id', 'propietarios.id')
            ->whereRaw($filter_)
            ->orderByRaw('propietarios.identificacion, v.placa Asc')
            ->get();
            $resources['propietarios'] = $result;

            return view('intranet.comp-propietarios.filter-propietarios')
            ->with([ 
                "resources" => $resources, 
            ]);

        }else{
            
        }
    }
    
    public function listar(){
    
        $resources=[];
        $list = Propietario::select(DB::raw('propietarios.id,propietarios.identificacion as cedula,propietarios.primer_nombre,propietarios.segundo_nombre,propietarios.apellidos,propietarios.direccion,propietarios.celular,v.placa'))
        ->leftJoin('vehiculos as v', 'v.propietario_id', 'propietarios.id')
        ->get();
        $resources['propietarios'] = $list;

        return view('intranet.comp-propietarios.listar')
        ->with([ 'resources' => $resources ]);

    }

    # valida la cedula del propietario
    public function validarCedula(Request $request){
        $resources=[];
        $fprop_  = Propietario::whereIdentificacion($request->data_id)->first(['identificacion']);
        if(empty($fprop_)){
            $xhr_response['code'] = 200;
            $xhr_response['message'] = "Cedula valida para el registro";
        }else{
            $xhr_response['code'] = 402;
            $xhr_response['message'] = "Cedula no valida ya se encuentra registrada en el sistema";
        }
        return $xhr_response;
    }

    # Formulario del nuevo Propietario
    public function nuevo_propietario(Request $request){
        
        $resources=[];
        $marcas = Marca::get(['id','nombre_marca']);
        $resourses['marcas'] = $marcas;
        return view('intranet.comp-propietarios.nuevo_propietario')
        ->with([ 'resourses' => $resourses ]);

    }

    # Permite crear el nuevo propietario
    public function create(Request $request){
        # return  $request;
        if(!empty($request)){
            try{ 
                $new_prop = new Propietario;
                $new_prop->identificacion = $request->identificacion;
                $new_prop->primer_nombre = $request->primer_nombre;
                $new_prop->segundo_nombre = $request->segundo_nombre;
                $new_prop->apellidos = $request->apellidos;
                $new_prop->direccion = $request->direccion;
                $new_prop->celular = $request->celular;
                if($new_prop->save()){
                    $this->xhr_response['code'] = 200;
                    $this->xhr_response['message'] = "Información del propietario registrada correctament";
                    $this->xhr_response['url'] = 'intranet/propietarios/listar';
                }else{
                    $this->xhr_response['code'] = 402;
                    $this->xhr_response['message'] = "Error al registrar el nuevo propietario en estos momentos intentelo mas tarde";
                }
            }catch(\Throwable $th){
                $this->xhr_response['code'] = 500;
                $this->xhr_response['message'] = $th->getMessage();
            }
        }else{

        }
        return  $this->xhr_response;  
    }

    
   
}
