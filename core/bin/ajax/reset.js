//global variable
var dinamicurl = window.location.protocol;


if(dinamicurl == 'http:'){
  var dinamicurl = 'http://localhost:8888/qymera/';
}else{
  var dinamicurl = 'https://qymera.net/';
}

$('#reset-btn').click( () => {
    let email = $('#email-reset').val();

    $.ajax({
        method: 'POST',
        url: dinamicurl + 'login/find/',
        data: { email: email },
        success: function(response){

            if(response == 1){

                Swal.fire({
                    position: 'top-end',
                    type: 'error',
                    title: 'No se ha podido completar la operación',
                    showConfirmButton: true,
                  }).then( () => {
                    window.location.reload();
                  })

            } else if (response == 2){

                Swal.fire({
                    position: 'top-end',
                    type: 'warning',
                    title: 'Algunos campos estan vacios',
                    showConfirmButton: false,
                    timer: 1500
                  })

            } else if (response == 3){

                Swal.fire({
                    position: 'top-end',
                    type: 'warning',
                    title: 'No se ha encontrado un usuario asociado a este correo',
                    showConfirmButton: false,
                    timer: 1500
                })

            } else if (response == 4){

                Swal.fire({
                    position: 'top-end',
                    type: 'success',
                    title: 'El correo de conformacion de cambio de contraseña ha sido enviado correctamente',
                    showConfirmButton: true,
                  }).then( () => {
                    window.location.reload();
                  })

            } else {
                console.error(response);
            }
        }
    })
})