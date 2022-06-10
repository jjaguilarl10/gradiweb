<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller{
    
    # Form login
    public function login(){

        return view('auth.login')
        ->with([ ]);

    }
    
    # validación de acceso
    public function authorization(Request $request){
        return view('intranet.dashboard')
        ->with([ ]);
    }

    



}
