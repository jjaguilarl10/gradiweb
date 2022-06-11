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
				<span>Validador</span> 
			</div>
		</div>	
		<div class="row g-0 mb-1">
			<div class="col-lg-8 px-2 pb-1 ">
				<div class="_thm_1120">Validador JSON</div>
			</div>
			 
		</div> 
	</div>

	<div class="_wlx px-4 ">
		<div class="row g-0 rounded bg-white mt-1 ">
			<div class="col-lg-12 p-3 px-4">
                <label>Ingresar Json Origen</label>
			    <textarea id="json_origen" tabindex="1" name="json_origen" placeholder="" class="mt-2 p-1" style="min-height:150px !important; background-color:black;color:white">[["2018-12-01","AM","ID123", 5000],["2018-12-01","AM","ID545", 7000],["2018-12-01","PM","ID545", 3000],["2018-12-02","AM","ID545", 7000]]
                </textarea>
			</div>
            <div class="col-lg-12 p-1 text-end px-4">
			    <div id="generate_result" class="btn btn-outline-dark btn-sm rounded px-3 mx-2 fw-bold  ">Convertir Arreglo</div>
			</div>
            <div class="col-lg-12 p-3 px-4">
			    <label>Arreglo Resultado</label>
			    <textarea id="json_resultado" tabindex="1" name="json_resultado" rows="10" placeholder="" class="mt-2"  style="min-height:150px !important; background-color:black;color:white">
                </textarea>
			</div>
		</div> 
	</div>
	
	 
	<script>
        $("#generate_result").click(function(){ 
            let arrayInitial_ =JSON.parse($("#json_origen").val());
            let arrayDestiny_ = {};
            let fecha_ = '', time_ = '';
            
            arrayInitial_.forEach(obj_ => {
                fecha_ = obj_[0];
                time_ = obj_[1];
                if (typeof arrayDestiny_[fecha_] === 'undefined'){  arrayDestiny_[fecha_] = {};}
                if (typeof arrayDestiny_[fecha_][time_] === 'undefined'){arrayDestiny_[fecha_][time_] = 0;}
                arrayDestiny_[fecha_][time_] += obj_[3];
            });

            $("#json_resultado").html(JSON.stringify(arrayDestiny_));
        });
	</script>

@endsection