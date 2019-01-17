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
    url: 'http://localhost:8888/qymera/teacher/actividades/add/',
    data: { title: title, type: type, description: description, start_date: start_date, end_date: end_date, id_indicator: id_indicator},
    success: function(response){
      if(response == 1){
        swal('error' , 'no se pudo enviar los datos' ,'error');
      }else if(response == 2){
        swal('Advertencia' , 'algunos campos estan vacios' ,'warning');
      }else if(response == 3){
        swal('Advertencia' , 'La actividad ya existe' ,'warning');
      }else if (response == 4) {
        swal('Exito' , 'Actividad creada' ,'success');
        location.replace('http://localhost:8888/qymera/teacher/actividades/');
      }else{
        console.log(response);
      }

    }
  })
})
