function openModalAdd(){
  $('#add_ind_modal').addClass('is-active');
}

function openModalEdit(){
  var id_ind = $('#id_ind').val();
  console.log("hola:" + id_ind);
  $('#edit_ind_modal').addClass('is-active');
}

function openModalDel(){
  $('#del_ind_modal').addClass('is-active');
}

$('#btnAddInd').click(function(){

  var new_indicador = $('#new_indicador').val();
  var n = $('#n').val();
  var id_grado = $('#id_grado').val();
  var id_materia = $('#id_materia').val();

  var indicador = new_indicador.replace(/\s\d\.\s*/, '');

  $.ajax({
    method: 'POST',
    url: 'indicador&action=add',
    data: {indicador: indicador, n: n, id_grado: id_grado, id_materia: id_materia},
    success: function(response){
      if(response == 1){
        swal('Error', 'error al solicitar la información', 'error');
      }else if(response == 2){
        swal('Alerta', 'Los campos estan vacios', 'warning');
      }else if(response == 3){
        swal('Alerta', 'El indicador ya existe', 'warning');
      }else if(response == 4){
        swal('Exito', 'Indicadir añadido', 'success');
        location.replace('indicador');
      }else{
        location.replace('indicador');
      }
    }
  });

});

$('#btnModInd').click(function(e){

  e.preventDefault();

  var id_indicador = $('#edit_id_indicador').val();

  var edit_indicador = $('#edit_indicador').val();

  $.ajax({
    method: 'POST',
    url: 'indicador&action=mod',
    data: {id_indicador: id_indicador, edit_indicador: edit_indicador},
    success: function(response){
      if(response == 1){
        swal('Error', 'error al solicitar la información', 'error');
      }else if(response == 2){
        swal('Alerta', 'Los campos estan vacios', 'warning');
      }else if(response == 3){
        swal('Exito', 'Indicadir editado', 'success');
        location.href="indicador";
      }else{
        console.log(response);
      }
    }
  });

});

$('#btnDelInd').click(function(){

  var id_ind = $('#id_indicador_to_del').val();

  $.ajax({
    method: 'POST',
    url: 'indicador&action=del',
    data: {id_ind: id_ind},
    success: function(response){
      if(response == 1){
        swal('Error', 'error al solicitar la información', 'error');
      }else if(response == 2){
        swal('Alerta', 'Los campos estan vacios', 'warning');
      }else if(response == 3){
        swal('Exito', 'Indicadir eliminado', 'success');
        location.replace('indicador');
      }else{
        location.href="indicador";
      }
    }
  });

});
