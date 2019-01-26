function addGrade(event, res){

  var button = event.target;

  button.classList.add('is-loading');

  var i = documnet.createElement('i');

  var name = res;
  $.ajax({
    method: 'POST',
    url: 'http://localhost:8888/qymera/coordinator/home/createGrades/add/' + name + '/',
    data: {name: name},
    success: function(response){
      if(response == 1){
        swal('ERROR', 'datos no enviados' ,'error')
      }else if(response == 2){
        swal('Alerta', 'el grado ya existe', 'warning');
      }else{
        button.classList.remove('is-loading');
        button.appendChild(i);

        $('i').addClass('fas fa-check');
      }
    }
  })
}

$('#BtnGroups').click(function(){

  var name = $('#TxtGrade').val();

  $.ajax({
    method: 'POST',
    url: 'http://localhost:8888/qymera/coordinator/home/createGrades/add/' + name + '/',
    data: {name: name},
    success: function(response){
      if(response == 1){
        swal('ERROR', 'datos no enviados' ,'error')
      }else if(response == 2){
        swal('Alerta', 'el grado ya existe', 'warning');
      }else{
        button.classList.remove('is-loading');
        button.appendChild(i);

        $('i').addClass('fas fa-check');
      }
    }
  })

})
