

//valida si un input esta vacio (ideal para el evento keyup) y bloquea un boton
function validarVacio(idElement,boton){
	var valido = 1;
	var ele = $("#"+idElement).val();
	if (ele == '' || !ele ){
		$("#"+boton).attr("disabled","disabled");
		valido = -1;
		$("#fg"+idElement).addClass('has-error');
		$("#hb"+idElement).html('NO PUEDE DEJAR CAMPOS VACIOS');
	}else{
		$("#"+boton).removeAttr("disabled");	
		$("#fg"+idElement).removeClass('has-error').addClass('has-success');	
		$("#hb"+idElement).html('CORRECTO');
	}
	return valido;
}

//valida si un input se le han agregado caracteres no numericos
function validarInputNum(idElement,boton){
	var valido = 1;
	var ele = parseFloat($("#"+idElement).val());
	if (ele == '' || isNaN(ele) ){
		$("#"+boton).attr("disabled","disabled");
		valido = -1;
		$("#fg"+idElement).addClass('has-error');
		$("#hb"+idElement).html('ERROR SE HAN INSERTADO CARACTERES NO VALIDOS');
	}else{
		$("#"+boton).removeAttr("disabled");	
		$("#fg"+idElement).removeClass('has-error').addClass('has-success');	
		$("#hb"+idElement).html('CORRECTO');
		valido = 1;
	}
	return valido;
}

