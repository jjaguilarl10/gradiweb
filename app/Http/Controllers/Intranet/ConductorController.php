<?php

namespace App\Http\Controllers\Intranet;
use Illuminate\Http\Request;
use App\Models\Conductor;
use Hash, Auth, Session, Mail, Redirect,DB,DateTime;

class ConductorController extends Controller{
    
    public function index(){
        $list = Conductor::all();
        if(empty($list)){
            return "NO existen Conductores creados";
        }else{
            return $list;
        }
    }

    public function create(Request $request){
        $conductor = Conductor::create($request->all());
        return response($conductor, 201);

    }

    public function store(Request $request){
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
