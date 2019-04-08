//global variable
var protocol = window.location.protocol;

if(protocol === 'http:'){
  var url_dir = 'http://localhost:8888/qymera/';

}else if(protocol === 'https:'){

  var url_dir = 'https://qymera.net/';
  
}else{
  console.error(protocol);
}

/**
 * ACTIVITY FUNCTIONS
 */

$('#btnActivity').click(function(e){
  e.preventDefault();
  var title = $('#title').val();
  var type = $('#type').val();
  var description = $('#description').val();
  var start_date = $('#start_date').val();
  var end_date = $('#end_date').val();
  var id_indicator = $('#id_indicator').val();

  $.ajax({
    type: 'POST',
    url: url_dir + 'teacher/actividades/add/',
    data: { title: title, type: type, description: description, start_date: start_date, end_date: end_date, id_indicator: id_indicator},
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
      }else if(response == 2){
        Swal.fire({
          position: 'top-end',
          type: 'warning',
          title: 'Algunos campos estan vacios',
          showConfirmButton: false,
          timer: 1500
        })
      }else if(response == 3){
        Swal.fire({
          position: 'top-end',
          type: 'warning',
          title: 'La Actividad ya existe!',
          showConfirmButton: false,
          timer: 1500
        })
      }else if (response == 4) {
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Actividad creada',
          showConfirmButton: true,
        }).then( () => {
          window.location.replace(url_dir + 'teacher/actividades/');
        })        
      }else{
        console.log(response);
      }

    }
  })
})


/**
 * INDICATOS FUNCTIONS
 */

function openModalAdd(){
  $('#add_ind_modal').addClass('is-active');
}

function redirecEdit(res){
  location.href= url_dir + "teacher/indicador/" + res;

}

$('#btnAddInd').click(function(){

  var new_indicator = $('#new_indicator').val();
  var id_grade = $('#id_grade').val();
  var id_group = $('#id_group').val();
  var id_matter = $('#id_matter').val();

  let indicator = new_indicator.replace(/[^a-z0-9\s]/gi, '').replace(/[_\s]/g, ' ').replace(/\d/g,'');


  $.ajax({
    method: 'POST',
    url: url_dir + 'teacher/indicador/add/',
    data: {indicator: indicator, id_grade: id_grade, id_group: id_group, id_matter: id_matter},
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
      }else if(response == 2){
        Swal.fire({
          position: 'top-end',
          type: 'warning',
          title: 'Algunos campos estan vacios',
          showConfirmButton: false,
          timer: 1500
        })
      }else if(response == 3){
        Swal.fire({
          position: 'top-end',
          type: 'warning',
          title: 'El indicador ya existe!',
          showConfirmButton: false,
          timer: 1500
        })
      }else if(response == 4){
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Indicadir añadido',
          showConfirmButton: true,
        }).then( () => {
          window.location.replace( url_dir + 'teacher/indicador/');
        })         
      }else{
        console.log(response);
        location.replace( url_dir + 'teacher/indicador/');
      }
    }
  });

});

$('#btnModInd').click(function(e){

  var id_indicador = $('#edit_id_indicador').val();
  var id_grado = $('#edit_id_grado').val();
  var id_grupo = $('#edit_id_grupo').val();
  var edit_indicador = $('#edit_indicador').val();

  $.ajax({
    method: 'POST',
    url: url_dir + 'indicator/edit/',
    data: {id_indicador: id_indicador, edit_indicador: edit_indicador},
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
      }else if(response == 2){
        Swal.fire({
          position: 'top-end',
          type: 'warning',
          title: 'Algunos campos estan vacios',
          showConfirmButton: false,
          timer: 1500
        })
      }else if(response == 3){
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Indicadir editado',
          showConfirmButton: true,
        }).then( () => {
          window. location.replace(url_dir + 'teacher/indicador/');
        })        
      }else{
        console.log(response);
      }
    }
  });

});

function deleteInd(res){

  Swal.fire({
    position: 'bottom-end',
    title: 'Estas seguro de eliminar este indicador?',
    text: 'Los cambios no se podrán revertir.',
    type: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Sí, borrar!'
  }).then((result) => {
    if(result.value){
      $.ajax({
        method: 'POST',
        url: url_dir + 'teacher/indicador/del/',
        data: {id_ind: res},
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
          }else if(response == 2){
            Swal.fire({
              position: 'top-end',
              type: 'warning',
              title: 'Algunos campos estan vacios',
              showConfirmButton: false,
              timer: 1500
            })
          }else if(response == 3){
            Swal.fire({
              position: 'top-end',
              type: 'success',
              title: 'Indicadir eliminado',
              showConfirmButton: true,
            }).then( () => {
              window.location.replace(url_dir + 'teacher/indicador/');
            })             
          }else{
            console.log(response);
            location.replace(url_dir + 'teacher/indicador/');
          }
        }
      });
    }else{
      Swal.fire({
        position: 'bottom-end',
        title: 'has cancelado la operación.',
        type: 'info'
      })
    }
  })

}

window.onload = function() {
  $("#form-edit").slideToggle();
};

/**
 * CHANGE PASSWORD FUNCTION
 */

$('#BtnChangePassword').click(function(){
	var new_password = $('#new_password').val();

	$.ajax({
		method: 'POST',
		url: url_dir + 'teacher/home/post/',
		data: {new_password: new_password},
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
			}else if(response == 2){
				Swal.fire({
          position: 'top-end',
          type: 'warning',
          title: 'Algunos campos estan vacios',
          showConfirmButton: false,
          timer: 1500
        })
			}else if(response == 3){
        Swal.fire({
          position: 'top-end',
          type: 'success',
          title: 'Contraseña Cambiada',
          showConfirmButton: true,
        }).then( () => {
          window.location.reload();
        }) 
			}else{
        console.error(response);
      }
		}
	})
})

/**
 * NAV FUNCTIONS
 */

$(document).ready(function(){
  $.ajax({
    method:'GET',
    url: url_dir + 'core/bin/functions/count-notification.php',
    success: function(res){
      $('#span-notification').text(res);
    },
    error: function(error){
      console.log(error);
    }
  });

  $.ajax({
    method:'GET',
    url: url_dir + 'core/bin/functions/count-shared.php',
    success: function(res){
      $('#span-shared').text(res);
    },
    error: function(error){
      console.log(error);
    }
  });
})

/**
 * NOTES FUNCTIONS
 */

 $('#BtnAddNote').click( function() {
    let id_indicator = $('#TextIdIndicator').val();
    let id_activity = $('#TextIdActivity').val();
    let id_student = $('#TextIdStudent').val();

    var inputs = document.getElementsByClassName( 'inputNote' ),
    names  = [].map.call(inputs, function( input ) {
        return input.value;
    }).join( '|' );

    console.log(inputs);

    console.log(names);

    /*$.ajax({
      method: 'POST',
      url: url_dir + 'teacher/notas/add/',
      data: {id_indicador: id_indicator, id_activity: id_activity, id_student: id_student},
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
        }else if(response == 2){
          Swal.fire({
            position: 'top-end',
            type: 'warning',
            title: 'Algunos campos estan vacios',
            showConfirmButton: false,
            timer: 1500
          })
        }else if(response == 3){
          Swal.fire({
            position: 'top-end',
            type: 'success',
            title: 'Nota enviada satisfactoriamente',
            showConfirmButton: true,
          }).then( () => {
            window.location.replace(url_dir + "teacher/actividades/");
          }) 
        }else{
          console.error(response);
        }
      }
    })*/
 })