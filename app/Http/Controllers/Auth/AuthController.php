<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Hash, Auth, Session, Redirect;
use App\user;

use App\Http\Controllers\Controller;


class AuthController extends Controller{

    use AuthenticatesUsers;

    public function __construct(){ $this->middleware('guest')->except('logout'); }

    # Form login
    public function login(){

        return view('auth.login')
        ->with([ ]);

    }
    
    # validación de acceso
    public function authorization(Request $request){
        if(empty($request->username) || empty($request->password) ){
            $xhr_response = Array("status" => 402, "data" => "" , "message" => "Datos no procesados no pueden estar vacios");
        }else{
    
            # valida las credeciales del usuario que desea ingresar
            $data_validate = User::where('identificacion',$request->username)->first();
            if(!empty($data_validate)){  
                $attempt = Auth::attempt(['identificacion' => $request->username,'password' => $request->password ]);             
                if($attempt){
                    if (Auth::check()){
                        return Redirect::to('intranet/dashboard');
                    }
                }else{
                    $xhr_response = Array("status" => 402, "data" => "" , "message" => "Su perfil de acceso no esta permitida para esta opción ");
                } 
            }else{
                $xhr_response = Array("status" => 402, "data" => "" , "message" => "Los datos suministrados no son válidos para el inicio de sesión desde este módulo, por favor verifíquelos ");
            } 

        }
        return redirect()->route('auth.login'); 
    }

    public function logout(){
        Session::flush();
        return Redirect::to('auth/login');

    }
    
    



}
