<div class="p-2">    
<form id="AddNewpro" action="" method="post" enctype="multipart/form-data" class="m-0 p-0" >
    @csrf 
    <div class="row g-1 mt-1 ">
        <div class="col-lg-3">
            <label>Cedula Propietario</label>
            <input type="text" id="identificacion"  class="field validar_cedula" data-name="identificacion"  value="" name="identificacion" placeholder="1234567890" required  />
        </div> 
    </div>
    <div class="row g-1 mt-1 ">
        <div class="col-lg-4">
            <label>Primer Nombre</label>
            <input type="text" id="primer_nombre" class="field " data-name="primer_nombre"  value="" name="primer_nombre" placeholder="Primer Nombre" required  />
        </div> 
        <div class="col-lg-4">
            <label>Segundo Nombre</label>
            <input type="text" id="segundo_nombre" class="field " data-name="segundo_nombre"  value="" name="segundo_nombre" placeholder="Segundo Nombre"   />
        </div> 
        <div class="col-lg-4">
            <label>Apellidos</label>
            <input type="text" id="apellidos" class="field " data-name="apellidos"  value="" name="apellidos" placeholder="Apellidos" required  />
        </div> 
    </div>
    <div class="row g-1 mt-2 pt-2 ">
        <div class="col-lg-12">
            <label>Dirección Propietario</label>
            <input type="text" id="direccion" class="field " data-name="direccion"  value="" name="direccion" placeholder="Dirección"  />
        </div>      
        <div class="col-lg-4">
            <label>Celular</label>
            <input type="text" id="celular" class="field " data-name="celular"  value="" name="celular" placeholder="Celular"   />
        </div> 
    </div>
    
    <div class="row g-1 mt-5 ">
    <div class="col-lg-6"></div>
        <div class="col-lg-6 p-2 text-end ">
        <button id="save_form" class="btn btn-primary btn-sm rounded px-3 "> Agregar Propietario </button>
    </div>
    </div>

</form>
</div>
<script>
$(document).ready(function(){
    $("form#AddNewpro").submit(function(e) {
        e.preventDefault();
        let formData = new FormData(this); 
        formData.append('_token', $("meta[name='csrf-token']").attr("content") ); 
        sform(formData,'intranet/propietarios/agregar','POST');
    });

    $(".validar_cedula").blur(function(){
        let d = $(this).val();
        
        if(d != ""){
        if (/^(undefined|"")$/.test(d)) {  WjAlert("! Error, <br/>Se debe espeficiar una cedula para el propietario.",'e'); }
        else{
            $.ajax({
                type: 'GET',
                url:path_+'intranet/propietarios/validar-cedula',
                data:{'data_id':d},
                cache: false,
                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                success:function(response){ 
                    if(response['code'] === 200 ){
                        WjAlert( response['message'] ,'s'); 
                    }else{

                        $("#identificacion").val("");
                        $("#identificacion").focus();
                        WjAlert( response['message'] ,'e'); 
                    
                    } 
                },error: function(xhr, type, exception, thrownError){
                    error_cacth( xhr.status , path_name );
                } 
            }); 
        }
        } 
    });

});
</script>
