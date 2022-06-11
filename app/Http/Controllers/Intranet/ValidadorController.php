<?php

namespace App\Http\Controllers\Intranet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ValidadorController extends Controller{
    
    public function index(Request $request){
        
        $resources=[];
        
        return view('intranet.comp-validador.validador')
        ->with([ 'resources' => $resources ]);
        
    }

}
