@extends('templates.default')
@section('title', 'Vehiculos | Listar ')

@section('Css_')
@endsection

@section('Js_')
@endsection 

@section('x-content')  

    <div class=" _fehtit ">
        <div class="_wlx">
        <div class="row g-0 " >
            <div class="col-lg-8 ">
                <a href="#">Inicio</a> 
            </div>
            <div class="col-lg-4">
            </div>
        </div>
        </div>
    </div>
    
    <div class="row g-0 mb-1">
	<div class="_wlx px-4 ">
		<div class="col-lg-8 p-4 pb-1 ">
			<div class="pb-2 " >
				<a href="{{route('intranet.dashboard')}}" class="">Dashboard</a> 
				<i > / </i> 
				<span>Vehiculos</span> 
			</div>	
			<div class="_thm_1120">Vehiculos</div>
			<div >Información de vehiculos registrados</div>
			
		</div>
		<div class="col-lg-4">
			
		</div>
	</div>
	</div>

@endsection