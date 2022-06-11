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
				<a href="{{route('vehiculo.listar')}}" class="">Vehiculos</a> 
                <i > / </i> 
				<span>Reportes</span> 
                <i > / </i> 
                <span>Reportes por Marcas</span> 
			</div>
		</div>	
		<div class="row g-0 mb-1">
			<div class="col-lg-8 px-2 pb-1 ">
				<div class="_thm_1120">Reportes por Marcas</div>
				<div >Información de vehiculos por marcas registradas</div>
			</div>
		</div> 
	</div>

	<div class="_wlx px-4 ">
		<div class="row g-0 rounded bg-white mt-1 ">
			 
			<div class="col-lg-12 p-1">
				<div id="filter_marcas">
                <div class="jtable p-3" style="min-height:50vh">
                    <table id="list-table">
                        <thead>
                            <tr><th>Nombre Marca</th><th>Cantidad Registrada</th></tr>
                        </thead>
                        <tbody>
                        @if(sizeof($resources['vehiculos'])>0)
                            @foreach( $resources['vehiculos'] as $item )
                            <tr>
                                <td>{{ ucfirst(strtolower($item->nombre_marca))}}</td>
                                <td>{{ $item->cantidad_marca }}</td>
                            </tr>
                            @endforeach 
                        @else
                        <tr>
                            <td colspan="7">
                                <div class="nofound-results">
                                    <strong> Sin Resultados.</strong><br>
                                    Lo sentimos, no hay resultados que mostrar aquí.<br>  
                                </div>
                            </td>
                        </tr>
                        @endif    
                        </tbody> 
                    </table>
                </div>
                <div class="row">
                    <div class="col-lg-12 p-3 px-4">Total Vehiculos x Marcas <strong>{{  sizeof($resources['vehiculos']) }}</strong></div> 
                </div> 
				</div>
			</div>
		</div> 
	</div>
	
	<div class=" p-1 " id="modalsContent_"></div>
	<script>
      
	</script>

@endsection