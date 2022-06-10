<?php

namespace App\Http\Controllers\Intranet;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Propietario;
use Hash, Auth, Session, Mail, Redirect,DB,DateTime;

class PropietarioController extends Controller{
    
    public function listar(){
        $list = Propietario::all();
        // if(empty($list)){
        //     return "NO existen Propietarios creados";
        // }else{
        //     return $list;
        // }
        return view('intranet.comp-propietarios.listar')
        ->with([ 'list ' => $list]);
    }

    public function create(Request $request){
        $propietario = Propietario::create($request->all());
        return response($propietario, 201);
    }

    public function store(Request $request){
        
    }

    
    public function show($id){
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
