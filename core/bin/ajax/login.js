$('#login').click(function(){

  // Traemos los datos de los inputs
  var email  = $('#email').val();
  var password = $('#password').val();

  // Envio de datos mediante Ajax
  $.ajax({
    method: 'POST',
    // Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
    url: 'http://localhost:8888/qymera/login/go/',
    // Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
    data: {email: email, password: password},
    // el parametro res es la respuesta que da php mediante impresion de pantalla (echo)
    success: function(res){
      // Ahora validamos la respuesta de php, si es error_1 algun campo esta vacio de lo contrario todo salio bien y redireccionaremos a donde diga php
      if(res == 'error_1'){
        swal('Error', 'Por favor ingrese todos los campos', 'error');
      }else if(res == 'error_2'){
        swal('Error', 'El usuario y contraseña que ingresaste es incorrecto', 'error');
      }else{
        // Redireccionamos a la página que diga corresponda el usuario
        window.location.href= res
      }

    }
  });

});

$('#tempLogin').click(function(){

  // Traemos los datos de los inputs
  var token = $('#token').val();

  // Envio de datos mediante Ajax
  $.ajax({
    method: 'POST',
    // Recuerda que la ruta se hace como si estuvieramos en el index y no en operaciones por esa razon no utilizamos ../ para ir a controller
    url: 'http://localhost:8888/qymera/tempLogin',
    // Recuerda el primer parametro es la variable de php y el segundo es el dato que enviamos
    data: {token: token},
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
        swal('Error', 'Por favor ingrese todos los campos', 'error');
      }else if(res == 'error_2'){
          swal('Error', 'El token es inválido', 'error');
      }else{
        // Redireccionamos a la página que diga corresponda el usuario
        window.location.href= res
      }

    }
  });

});
