<div class="p-2">    
<form id="AddNovVh" action="" method="post" enctype="multipart/form-data" class="m-0 p-0" >
    @csrf 
    <div class="row g-1 mt-1 ">
        <div class="col-lg-3">
            <label>Placa</label>
            <input type="text" id="placa" pattern="[A-Z]{3}[-]\d{3}"  maxlength="7" class="field " data-name="placa"  value="" name="placa" placeholder="ABC-023" required  />
        </div> 
    </div>
    <div class="row g-1 mt-1 ">
        <div class="col-lg-4">
            <label>Color</label>
            <input type="text" id="color" class="field " data-name="color"  value="" name="color" placeholder="Color Vehiculo" required  />
        </div> 
        <div class="col-lg-4">
            <label>Marca</label>
            <select class="form-select" aria-label=" select  " data-placeholder="Marca Vehiculo" id="marca_id" name="marca_id" class="form-control field select-item " data-field="marca_id" style="width: 100%" > 
                <option  value="0" selected>Seleccionar Marca</option>
                @foreach ($resourses['marcas'] as $marca)
                    <option value="{{$marca->id}}">{{$marca->nombre_marca}}</option>
                @endforeach
            </select> 
        </div> 
        <div class="col-lg-4">
            <label>Tipo Vehiculo</label>
            <select class="form-select" aria-label=" select  " data-placeholder="Tipo Vehiculo" id="tipo_vehiculo" name="tipo_vehiculo" class="form-control field select-item " data-field="tipo_vehiculo" style="width: 100%" >
                <option value="" selected>Seleccionar</option>
                <option value="Motocicleta">Motocicleta</option>
                <option value="Motocarro">Motocarro</option>
                <option value="Mototriciclo">Mototriciclo</option>
                <option value="Cuatrimoto">Cuatrimoto</option>
                <option value="Automóvil">Automóvil</option>
                <option value="Campero">Campero</option>
                <option value="Camioneta">Camioneta</option>
                <option value="Microbús">Microbús</option>
            </select> 
        </div>  
    </div>
    <div class="row g-1 mt-2 pt-2 ">
        <div class="col-lg-12">
        <select class="form-select" aria-label=" select  " data-placeholder="Propietario" id="propietario_id" name="propietario_id" class="form-control field select-item " data-field="propietario_id" style="width: 100%" > 
            <option  value="0" selected>Seleccionar Propietario</option>
            @foreach ($resourses['propietarios'] as $propietario)
                <option value="{{$propietario->id}}">{{$propietario->identificacion}} - {{$propietario->primer_nombre}} {{$propietario->segundo_nombre}} {{$propietario->apellidos}}</option>
            @endforeach
        </select> 
        </div>
    </div>
    
    <div class="row g-1 mt-5 ">
    <div class="col-lg-6"></div>
        <div class="col-lg-6 p-2 text-end ">
        <button id="save_form" class="btn btn-primary btn-sm rounded px-3 "> Agregar Vehiculo </button>
    </div>
    </div>

</form>
</div>
<script>
$(document).ready(function(){
    $("form#AddNovVh").submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this); 
        formData.append('_token', $("meta[name='csrf-token']").attr("content") ); 
        sform(formData,'intranet/vehiculos/agregar','POST');
    });
});
</script>
