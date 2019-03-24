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
        swal('error' , 'no se pudo enviar los datos' ,'error');
      }else if(response == 2){
        swal('Advertencia' , 'algunos campos es tan vacios' ,'warning');
      }else if(response == 3){
        swal('Advertencia' , 'La actividad ya existe' ,'warning');
      }else if (response == 4) {
        swal('Exito' , 'Actividad creada' ,'success');
        location.replace(url_dir + 'teacher/actividades/');
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

  var new_indicador = $('#new_indicador').val();
  var id_grado = $('#id_grado').val();
  var id_grupo = $('#id_grupo').val();
  var id_materia = $('#id_materia').val();

  var indicador = new_indicador.replace(/\s\d\.\s*/, '');

  $.ajax({
    method: 'POST',
    url: url_dir + 'teacher/indicador/add/',
    data: {indicador: indicador, id_grado: id_grado, id_grupo: id_grupo, id_materia: id_materia},
    success: function(response){
      if(response == 1){
        swal('Error', 'error al solicitar la información', 'error');
      }else if(response == 2){
        swal('Alerta', 'Los campos estan vacios', 'warning');
      }else if(response == 3){
        swal('Alerta', 'El indicador ya existe', 'warning');
      }else if(response == 4){
        swal('Exito', 'Indicadir añadido', 'success');
        location.replace( url_dir + 'teacher/indicador/');
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
        swal('Error', 'error al solicitar la información', 'error');
      }else if(response == 2){
        swal('Alerta', 'Los campos estan vacios', 'warning');
      }else if(response == 3){
        swal('Exito', 'Indicadir editado', 'success');
        location.replace(url_dir + 'teacher/indicador/');
      }else{
        console.log(response);
      }
    }
  });

});

function deleteInd(res){

  Swal({
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
            swal('Error', 'error al solicitar la información', 'error');
          }else if(response == 2){
            swal('Alerta', 'Los campos estan vacios', 'warning');
          }else if(response == 3){
            swal('Exito', 'Indicadir eliminado', 'success');
            location.replace(url_dir + 'teacher/indicador/');
          }else{
            console.log(response);
            location.replace(url_dir + 'teacher/indicador/');
          }
        }
      });
    }else{
      Swal({
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
				swal('error' , 'no se pudo enviar los datos' ,'error');
			}else if(response == 2){
				swal('Advertencia' , 'algunos campos es tan vacios' ,'warning');
			}else if(response == 3){
				swal('Exito' , 'Contraseña Cambiada' ,'success');
			}else{
        console.error(response);
      }

			location.reload();
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