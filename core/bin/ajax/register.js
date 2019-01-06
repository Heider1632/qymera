$('#register').click(function(){

  // Traemos los datos de los inputs
  var email  = $('#email_reg').val();
  var clave = $('#pass_reg').val();
  var clave_2 =  $('#pass_reg_2').val();

  if (clave === clave_2) {
      // Envio de datos mediante Ajax
      $.ajax({
      method: 'POST',
      // Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
      url: 'core/controller/registerController.php',
      // Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
      data: {correo: email, clave: clave},
      // el parametro res es la respuesta que da php mediante impresion de pantalla (echo)
      success: function(res){

        // Ahora validamos la respuesta de php, si es error_1 algun campo esta vacio de lo contrario todo salio bien y redireccionaremos a donde diga php
        if(res == 'error_1'){
        swal('Error', 'Todos los campos deben ser llenados', 'error');
        }else if(res == 'error_2'){
          // Recuerda que si no necesitas validar si es un email puedes eliminar el if de la linea 34
          swal('Error', 'Por favor ingrese un email valido', 'warning');
        }else if(res == 'error_3'){
          swal('Error', 'El email que ingresaste ya existe', 'error');
        }else{
          // Redireccionamos a la página que diga corresponda el usuario
          window.location.href= res
        }

      }
    });

    } else{

      swal('Error', 'La contraseñas no coinciden', 'error');
    }

});
