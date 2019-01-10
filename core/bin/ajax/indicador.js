function openModalAdd(){
  $('#add_ind_modal').addClass('is-active');
}

function redirecEdit(res){
  //capturo el id que me envia la funcion
  var response = res;
  //lanzo un ajax modo asincrono
  $.ajax({
    method: 'POST',
    url: 'http://localhost:8888/qymera/indicador/',
    data: {response: response},
    success: function(res){
      console.log(res);
      openModalEdit();
    }
  });

}

function openModalEdit(){
  $('#edit_ind_modal').addClass('is-active');
}



$('#btnAddInd').click(function(){

  var new_indicador = $('#new_indicador').val();
  var id_grado = $('#id_grado').val();
  var id_grupo = $('#id_grupo').val();
  var id_materia = $('#id_materia').val();

  var indicador = new_indicador.replace(/\s\d\.\s*/, '');

  $.ajax({
    method: 'POST',
    url: 'http://localhost:8888/qymera/indicador/add/',
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
        location.replace('http://localhost:8888/qymera/indicador/');
      }else{
        console.log(response);
        location.replace('http://localhost:8888/qymera/indicador/');
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
    url: 'http://localhost:8888/qymera/indicator/edit/',
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
