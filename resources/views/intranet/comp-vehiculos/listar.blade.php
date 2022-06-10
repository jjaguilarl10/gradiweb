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
    
    
	<div class="_wlx px-4 ">
		<div class="row g-0">
			<div class="col-lg-12 pt-3 px-2">
				<a href="{{route('intranet.dashboard')}}" class="">Dashboard</a> 
				<i > / </i> 
				<span>Vehiculos</span> 
			</div>
		</div>	
		<div class="row g-0 mb-1">
			<div class="col-lg-8 px-2 pb-1 ">
				<div class="_thm_1120">Vehiculos</div>
				<div >Información de vehiculos registrados</div>
			</div>
			<div class="col-lg-4 text-end">
				<div id="registrar_vehiculo" class=" _jmodalVehiculo btn btn-outline-primary btn-sm rounded-pill m-2 px-3"> Registrar Vehiculo </div>
			</div>
		</div> 
	</div>

	<div class="_wlx px-4 ">
		<div class="row g-0 rounded bg-white mt-1 ">
			<div class="col-lg-12 pt-4 p-3">
				<div class="row g-1">
					 
				</div>
			</div>
			<div class="col-lg-12 p-1">
				<div id="filter_vehiculos">
					@include("intranet.comp-vehiculos.filter-vehiculos") 
				</div>
			</div>
		</div> 
	</div>
	
	<div class=" p-1 " id="modalsContent_"></div>
	<script>
        $("._jmodalVehiculo").click(function(){ 
            let fData = {};
		    let modal_vehiculo = {
                destiny_ : "modalsContent_",
                title_ : "Agregar Nuevo Vehiculo",
                css_ : "jmodal",
                css_header_ : " _hbb ",
                size_:" modal-lg ",
                id_ : "modal_vehiculo",
                template_ : "_tmpmodals",
                form :{ "method":"GET","data":fData,"url":"intranet/vehiculos/nuevo","destiny":"modalsContent_"},
            };
            jModals(modal_vehiculo);
        });
	</script>

@endsection