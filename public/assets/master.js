/*--- Configuración generales del proyecto  ---*/
function Reloj() {var tiempo = new Date(); let hora = tiempo.getHours(); let minuto = tiempo.getMinutes(); let segundo = tiempo.getSeconds();document.getElementById('hora').innerHTML = hora; document.getElementById('minuto').innerHTML = minuto; document.getElementById('segundo').innerHTML = segundo;setTimeout('Reloj()', 1000);str_hora = new String(hora);if (str_hora.length == 1) { document.getElementById('hora').innerHTML = '0' + hora; }str_minuto = new String(minuto);if (str_minuto.length == 1) { document.getElementById('minuto').innerHTML = '0' + minuto; }str_segundo = new String(segundo);if (str_segundo.length == 1) { document.getElementById('segundo').innerHTML = '0' + segundo; }} 

let Protocol_ = window.location.protocol,
path_ = Protocol_ +"//"+ window.location.hostname +":"+ window.location.port+"/";

let getform = function load_form_modal(array_form){ 
    $("#"+ array_form['destiny']).html("Cargando ...");
    $.ajax({
        type: array_form['method'],
        url:  path_+array_form['url'],
        data: array_form['data'],
        cache: false,
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
        success:function(response){  
            $("#"+ array_form['destiny']).html(response);
        },error: function(xhr, type, exception, thrownError){ alert(xhr.status);}
    });
}

let jModals = function jModalContent ( p ){
	
	let design_ ='';
	let h_ = '<div class="modal-header '+p['css_header_']+'">'+
		'<span class="modal-title" id="lblmodalTitle">'+p['title_']+'</span>'+
		'<div class="btn-close-modal rounded-pill " data-bs-dismiss="modal" aria-label="Close"><i class="icofont-close">Cerrar</i></div>'+
	'</div>';
	if(p != ""){
		design_ ='<div class="modal fade _dm0942 '+p['css_']+'" id="'+p['id_']+'" tabindex="-1" aria-labelledby="modal'+p['id_']+'" aria-hidden="false">'+
			'<div class="modal-dialog '+p['size_']+'">'+
				'<div class="modal-content">'+
					h_+
					'<div class="modal-body p-0" ><div class="p-2 " id="'+p['template_']+'"></div></div>'+
				'</div>'+
			'</div>';
			
		$('#'+p['destiny_']).html("");
		$('#'+p['destiny_']).prepend(design_);
		$('#'+p['id_']).modal('show');

		if(p['form']['method'] == "GET"){
			let array_form_ = {
				'method':'GET',
				'data':p['form']['data'],
				'url':p['form']['url'],
				'destiny':'_frm'+p['form']['destiny'],
			};
			let sform_ = '<div id="_frm'+p['destiny_']+'" class="p-1">Cargando ...</div>';
			$('#'+p['template_']).append(sform_);
			getform(array_form_);	 	
		}
	}else{
		alert("parametros del modal estan vacios");
	}
}

let sform = function save_form(formData,url,method){ 
    $.ajax({
        url: path_+url,
        type: method,
        data: formData,
        success: function (response) { 
            if(response['code'] == 200){ 

                WjAlert(response['message'],'s');
                if(response['url'] != ""){
                    top.location.href = (path_+response.url); 
                }else{
                }

            }else{
                WjAlert(response['message'],'e');
            }
        },
        cache: false,
        contentType: false,
        processData: false
    });
}