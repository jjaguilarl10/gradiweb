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
				<span>Propietarios</span> 
			</div>	
			<div class="_thm_1120">Propietarios</div>
			<div >Información de Propietarios registrados</div>
			
		</div>
		<div class="col-lg-4">
			
		</div>
	</div>
	</div>

    <div class="_wlx row g-0 px-5 mt-2 "> 

		<div class="row g-0 rounded bg-white mt-1 ">
			<div class="col-lg-12 pt-4 p-3">
				<div class="row g-1">
					<div class="col-lg-1 p-2">
						Filtrar Por : 
					</div>
					<div class="col-lg-2">
						<input type="text" id="id_afiliado" name="id_afiliado" value="" placeholder="Identificación" />
					</div>
					<div class="col-lg-4">
						<input type="text" id="name_afiliado" name="name_afiliado" value="" placeholder="Nmbres" />
					</div>
					 

					<div class="col-lg-3 px-2 ">
						<div id="filter_result" class="btn btn-outline-primary btn-sm rounded-pill px-3 mx-2 fw-bold  "> Filtrar Búsqueda </div>
					</div>
				</div>
			</div>
			<div class="col-lg-12 p-1">
				<div id="filter_afiliaciones">
					@include("intranet.comp-propietarios.filter-propietarios") 
				</div>
			</div>
		</div> 

	</div>

@endsection