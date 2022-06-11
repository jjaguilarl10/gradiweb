<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash, Auth, Session, Redirect;


class AuthController extends Controller{
    
    # Form login
    public function login(){

        return view('auth.login')
        ->with([ ]);

    }
    
    # validación de acceso
    public function authorization(Request $request){
    
        $this->validate($request, [ 'identificacion' => 'required', 'password' => 'required', ]);
        return $credentials_ = $request->only('identificacion', 'password');
        return $users_ = User::where('identificacion', $request->identificacion)->where('idPerfil',2)->first();

        
        return Redirect::to('intranet/dashboard');
    }

    public function logout(){
        Session::flush();
        return Redirect::to('auth/login');

    }
    
    



}
