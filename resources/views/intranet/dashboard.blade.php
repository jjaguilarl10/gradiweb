@extends('templates.default')
@section('title', 'Dashboard | ')

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
				<a href="#" class="">Inicio</a> 
				<i class="icofont-long-arrow-right  "></i> 
				<span>Dashboard</span> 
			</div>	
			<div class="_thm_1120">Dashboard</div>
			<div class="pt-1">Panel de control general</div>
			
		</div>
		<div class="col-lg-4">
			
		</div>
	</div>
	</div>

	<div class="_wlx row g-0 px-5 mt-2 ">
		<div class="row g-1 mb-2">

		<div class="col-lg-3 col-md-3 col-6 ">
          <div class="rounded bg-white p-3">
            <label class="fw-normal">Total <a href="{{route('propietarios.listar')}}">Propietarios</a></label>
            <div class="fs-4 p-2 fw-bold">
				{{ $resources['propietarios']}}
            </div>
          </div>
        </div>

		<div class="col-lg-3 col-md-3 col-6 ">
          <div class="rounded bg-white p-3">
            <label class="fw-normal">Total <a href="{{route('vehiculo.listar')}}">Vehiculos</a></label>
            <div class="fs-4 p-2 fw-bold">
				{{ $resources['vehiculos']}}
            </div>
			
          </div>
        </div>

	</div>
	</div> 

@endsection