<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Cookie\Factory, Cookie; 
use Illuminate\Http\Request;

use Hash, Auth, Session, Mail, Redirect,DB,DateTime;
use App\Models\Vehiculo, App\Models\Marca, App\Models\Propietario;

class DashboardController extends Controller{
      

    public function index(){

        $resultPropietarios = Propietario::groupBy('identificacion')->count();
        $resources['propietarios'] = $resultPropietarios;

        $resultVehiculos = Vehiculo::groupBy('placa')->count();
        $resources['vehiculos'] = $resultVehiculos;

        return view('intranet.dashboard')
        ->with(['resources' => $resources]);

    }


}
