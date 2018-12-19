$('#ciclo_periodo').click(function(){

	var id_periodo = $('#periodo').val();
	var fecha_inicio = $('#fecha_inicio').val();
	var fecha_cierre = $('#fecha_cierre').val();

	$.ajax({
	method: 'POST',
    // Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
    url: 'core/controller/cicloController.php',
    // Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
    data: {id_periodo: id_periodo, fecha_inicio: fecha_inicio, fecha_cierre: fecha_cierre},
    // Esta funcion se ejecuta antes de enviar la información al archivo indicado en el parametro url
    beforeSend: function(){
      // Mostramos el div con el id load mientras se espera una respuesta del servidor (el archivo solicitado en el parametro url)
      $('#load').show();
    },
    // el parametro res es la respuesta que da php mediante impresion de pantalla (echo)
    success: function(res){
      // Lo primero es ocultar el load, ya que recibimos la respuesta del servidor
      $('#load').hide();

      // Ahora validamos la respuesta de php, si es error_1 algun campo esta vacio de lo contrario todo salio bien y redireccionaremos a donde diga php
      if(res == 'error_1'){
        /*
        Para usar sweetalert es muy sencillo, has de cuenta que haces un alert
        solo que esta ves enviaras 3 parametros separados por comas, el primero
        es el titulo de la alerta, el segundo es la descripcion y el tercero es el tipo de alerta
        en el momento conozco tres tipos, entonces puedes variar entre success: Muestra animación de un check,
        warning: muestra icono de advertencia amarillo y error: muestra una animacion con una X muy chula :v
        */
        swal('Error', 'Por favor ingrese todos los campos', 'error');
      }else if(res == 'error_2'){
        // Recuerda que si no necesitas validar si es un email puedes eliminar el if de la linea 34
        swal('Error', 'Por favor ingrese un email valido', 'warning');
      }else if(res == 'error_3'){
        swal('Error', 'El usuario y contraseña que ingresaste es incorrecto', 'error');
      }else{
        // Redireccionamos a la página que diga corresponda el usuario
        window.location.href= res
      }

    }

	});

});

$('#ciclo_ind').click(function(){

	var hora_inicio = $('#hora_inicio').val();
	var hora_cierre = $('#hora_cierre').val();

	$.ajax({

		method: 'POST',
    	// Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
    	url: 'core/bin/functions/ciclonotas.php',
    	// Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
    	data: {hora_inicio: hora_inicio, hora_cierre: hora_cierre},
    	// el parametro res es la respuesta que da php mediante impresion de pantalla (echo)
    	success: function(res){

    		if(res == 1){

    			swal('Exito', 'Ciclo de notas cambiado exitosamente', 'success');
    			setTimeout("location.reload()", 1000);

    		}else{
    			swal('Error', 'Oh Oh :c Algo no salio bien', 'error');
    			setTimeout("location.reload()", 1000);
    			console.log(res);
    		}

    	}
	});


});

$('#ciclo_notas').click(function(){

	var inicio_notas = $('#inicio_notas').val();
	var cierre_notas = $('#cierre_notas').val();

	$.ajax({

		method: 'POST',
    	// Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
    	url: 'core/bin/functions/ciclonotas.php',
    	// Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
    	data: {inicio_notas: inicio_notas, cierre_notas: cierre_notas},
    	// el parametro res es la respuesta que da php mediante impresion de pantalla (echo)
    	success: function(res){
            
    		if(res == 1){

    			swal('Exito', 'Ciclo de notas cambiado exitosamente', 'success');
    			setTimeout("location.reload()", 1000);

    		}else{
    			swal('Error', 'Oh Oh :c Algo no salio bien', 'error');
    			setTimeout("location.reload()", 1000);
    			console.log(res);
    		}
    		
    	}
	});


});