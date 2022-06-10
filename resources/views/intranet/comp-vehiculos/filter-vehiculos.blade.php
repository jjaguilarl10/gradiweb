<div class="jtable p-3" style="min-height:55vh">
    <table id="list-table">
        <thead>
            <tr><th>#</th><th>Placa</th> <th>Color</th><th>Marca</th><th>Tipo Vehiculo</th><th>Nombre Propietario</th><th></th></tr>
        </thead>
        <tbody>
        @if(sizeof($resources['vehiculos'])>0)
            @foreach( $resources['vehiculos'] as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->placa}}</td>
                <td>{{ ucfirst(strtolower($item->marca)) }}</td>
                <td>{{$item->color}}</td>
                <td>{{$item->tipo_vehiculo}}</td>
                <td>{{$item->nombre_propietario}}</td>
                <td><div class="text-primary" data-id=">{{$item->id}}" >Editar</div></td> 
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
    <div class="col-lg-12 p-3 px-4">Total Vehiculos <strong>{{  sizeof($resources['vehiculos']) }}</strong></div> 
</div> 