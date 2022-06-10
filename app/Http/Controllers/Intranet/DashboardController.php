<?php

namespace App\Http\Controllers\Intranet;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Cookie\Factory, Cookie; 
use Illuminate\Http\Request;

use Hash, Auth, Session, Mail, Redirect,DB,DateTime;


class DashboardController extends Controller{
      

    public function index(){

        return view('intranet.dashboard')
        ->with([ ]);

    }


}
