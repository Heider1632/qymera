function openModalAdd(){
  $('#add_ind_modal').addClass('is-active');
}

function redirecEdit(res){
  location.href="http://localhost:8888/qymera/teacher/indicador/" + res;

}

$('#btnAddInd').click(function(){

  var new_indicador = $('#new_indicador').val();
  var id_grado = $('#id_grado').val();
  var id_grupo = $('#id_grupo').val();
  var id_materia = $('#id_materia').val();

  var indicador = new_indicador.replace(/\s\d\.\s*/, '');

  $.ajax({
    method: 'POST',
    url: 'http://localhost:8888/qymera/teacher/indicador/add/',
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
        location.replace('http://localhost:8888/qymera/teacher/indicador/');
      }else{
        console.log(response);
        location.replace('http://localhost:8888/qymera/teacher/indicador/');
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
    url: 'http://localhost:8888/qymera/teacher/indicator/edit/',
    data: {id_indicador: id_indicador, edit_indicador: edit_indicador},
    success: function(response){
      if(response == 1){
        swal('Error', 'error al solicitar la información', 'error');
      }else if(response == 2){
        swal('Alerta', 'Los campos estan vacios', 'warning');
      }else if(response == 3){
        swal('Exito', 'Indicadir editado', 'success');
        location.replace('http://localhost:8888/qymera/teacher/indicador/');
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
        url: 'http://localhost:8888/qymera/teacher/indicador/del/',
        data: {id_ind: res},
        success: function(response){
          if(response == 1){
            swal('Error', 'error al solicitar la información', 'error');
          }else if(response == 2){
            swal('Alerta', 'Los campos estan vacios', 'warning');
          }else if(response == 3){
            swal('Exito', 'Indicadir eliminado', 'success');
            location.replace('http://localhost:8888/qymera/teacher/indicador/');
          }else{
            console.log(response);
            location.replace('http://localhost:8888/qymera/teacher/indicador/');
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

/*new Promise(function(resolve, reject) {

    resolve((res) => {
      console.log(res);
    })

    reject(() => {
      console.error(error);
    })

  }).then(function(result) {

    alert(result);
    return result * 2; // <-- (1)

  });*/
