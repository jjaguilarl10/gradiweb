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
			<div class="col-lg-12 p-3 pb-2">
				<div class="p-2">Filtrar por </div>
				<div class="row g-1">
					<div class="col-lg-2">
						<input type="text" id="placa" pattern="[A-Z]{3}[-]\d{3}"  name="placa" value="" placeholder="ABC-000" />
					</div>
					<div class="col-lg-1">
						<input type="text" id="cedula_propietario" name="cedula_propietario" value="" placeholder="Cedula propietario" />
					</div>
					<div class="col-lg-3">
						<input type="text" id="nombre_propietario" name="nombre_propietario" value="" placeholder="Nombre propietario" />
					</div>
					<div class="col-lg-3">
						<input type="text" id="apellidos_propietario" name="apellidos_propietario" value="" placeholder="Apellidos propietario" />
					</div>

					<div class="col-lg-3 px-2 ">
						<div id="filter_result" class="btn btn-outline-dark btn-sm rounded-pill px-3 mx-2 fw-bold  "> Filtrar Información </div>
					</div>
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


		$("#filter_result").click(function(){ 
			let placa_ = $("#placa").val(),
			cedula_ = $("#cedula_propietario").val(),
			nombres_ =  $("#nombre_propietario").val(),
			apellidos_ =  $("#apellidos_propietario").val();

			$("#filter_vehiculos").html('<div class="p-4"><div class="spinner-border spinner-border-sm" role="status"><span class="visually-hidden">Loading...</span></div> <span class="px-3">Cargando ...</span></div>');

			pfilter_ = path_+"intranet/vehiculos/filter";
			$.ajax({
			  	type:'GET',
			  	url:pfilter_,
				data:{ 'data_placa':placa_,'data_cedula':cedula_, 'data_nombre':nombres_, 'data_apellidos':apellidos_},
			  	cache: false, 
			  	headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
				success:function(response){

					if(typeof(response['status']) != "undefined" && response['status'] !== null){
						top.location.href = (path_+response.url); 
					}else{ 
						$("#filter_vehiculos").html(response);
					}

			  	},error: function(xhr, type, exception, thrownError){
			    	$("#filter_vehiculos").html(xhr); 
			  	} 
			}); 
		});

	</script>

@endsection