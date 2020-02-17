alert("modul test test");

/**
 * Valida los datos antes de permitir guardar el formulario
 * @returns {Boolean}
 */
function module_save() {

	// Si los datos del formulario no son correctos no continua 
	if(!check_form('EditView')){
		return false;
	}
	
	/*
	if($('#codigo').val() == 'vacio'){
    	alert('Seleccion el campo codigo');
    	$('#codigo').focus();
    	return false;
	}
	*/
	
	/*
	var codigo = $('#codigo').val();
	var identificacion = $('#identificacion').val();
	
	// Para que no sea asincrono se emplea este metodo
    var xmlHttp = null;
		
    xmlHttp = new XMLHttpRequest();
    xmlHttp.open( "GET", url, false );
    xmlHttp.send( null );
//	console.log(xmlHttp.responseText);

    response = YAHOO.lang.JSON.parse(xmlHttp.responseText);
    console.log(response);
	
    var id = document.getElementsByName('record')[0].value;
//    console.log("Record = " + document.getElementsByName('record')[0].value);
    
    if(response['id'] != 'No existe' && id != response['id']){ 

    	alert('El codigo pertenece a "' + response['name'] + '"');
    	document.getElementById('codigo').focus();
    	return false;
    }
	*/

    
    // Validacion exitosas
    return true;

}