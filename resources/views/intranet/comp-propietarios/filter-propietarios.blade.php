<div class="jtable p-3" style="min-height:50vh">
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Cedula</th>
                <th>Primer nombre</th>
                <th>Segundo nombre</th>
                <th>Apellidos</th>
                <th>Dirección</th>
                <th>Celular</th>
                <th>Placa</th>
            </tr>
        </thead>
        <tbody>
            @if(sizeof($resources['propietarios'])>0)
                @foreach( $resources['propietarios'] as $item )
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->cedula}}</td>
                    <td>{{$item->primer_nombre}}</td>
                    <td>{{$item->segundo_nombre}}</td>
                    <td>{{$item->apellidos}}</td>
                    <td>{{$item->direccion}}</td>
                    <td>{{$item->celular}}</td>
                    <td>{{$item->placa}}</td>
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
    <div class="col-lg-12 p-3 px-4">Total Propietarios <strong>{{  sizeof($resources['propietarios']) }}</strong></div> 
</div> 