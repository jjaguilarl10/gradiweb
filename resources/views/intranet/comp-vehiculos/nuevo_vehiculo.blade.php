<div class="p-2">    
<form id="AddNovVh" action="" method="post" enctype="multipart/form-data" class="m-0 p-0" >
    @csrf 
    <div class="row g-1 mt-1 ">
        <div class="col-lg-3">
            <label>Placa</label>
            <input type="text" id="placa" maxlength="7" class="field " data-name="placa"  value="" name="placa" placeholder="Placa" required  />
        </div> 
    </div>
    <div class="row g-1 mt-1 ">
        <div class="col-lg-4">
            <label>Color</label>
            <input type="text" id="color" class="field " data-name="color"  value="" name="color" placeholder="Color" required  />
        </div> 
        <div class="col-lg-4">
            <label>Marca</label>
            <select class="form-select" aria-label=" select  " data-placeholder="Marca Vehiculo" id="marca" name="tipo_vehiculo" class="form-control field select-item " data-field="tipo_vehiculo" style="width: 100%" >  
                <option selected>Seleccionar Marca</option>
                @foreach ($resourses['marcas'] as $marca)
                    <option value="{{$marca->id}}">{{$marca->nombre_marca}}</option>
                @endforeach
            </select> 
        </div> 
        <div class="col-lg-4">
            <label>Tipo Vehiculo</label>
            <select class="form-select" aria-label=" select  " data-placeholder="Tipo Vehiculo" id="tipo_vehiculo" name="tipo_vehiculo" class="form-control field select-item " data-field="tipo_vehiculo" style="width: 100%" >  
                <option selected>Seleccionar</option>
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
        <div class="col-lg-3">
            <label>Cedula Propietario</label>
            <input type="text" id="cedula_propietario" class="field " data-name="cedula_propietario"  value="" name="cedula_propietario" placeholder="Cedula"  />
        </div>      
        <div class="col-lg-9">
            <label>Nombre Propietario</label>
            <input type="text" id="nombre_propietario" class="field " data-name="nombre_propietario"  value="" name="nombre_propietario" placeholder="Nombre Propietario"  />
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