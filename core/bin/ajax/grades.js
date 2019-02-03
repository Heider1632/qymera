$(document).ready(function(){

  $('#BtnGrade').click(function(){

    var name = $('#TxtGrade').val();

    $.ajax({
      method: 'POST',
      url: 'http://localhost:8888/qymera/coordinator/home/createGrades/add/',
      data: {name: name},
      success: function(response){
        //hide loading button animation
        button.classList.remove('is-loading');

        if(response == 1){
          swal('ERROR', 'datos no enviados' ,'error');
        }else if(response == 2){
          button.classList.remove('is-success');
          button.classList.add('is-warning');
          button.appendChild(i);

          $('i').addClass('fas fa-exclamation-circle');
        }else{
          button.classList.remove('is-loading');
          button.appendChild(i);

          $('i').addClass('fas fa-check');
        }
      }
    })

  })

})

function addGrade(event, res){

  var button = event.target;

  var i = document.createElement('i');

  var name = res;
  $.ajax({
    method: 'POST',
    url: 'http://localhost:8888/qymera/coordinator/home/createGrades/add/',
    data: {name: name},
    beforeSend: function(){
      button.classList.add('is-loading');
    },
    success: function(response){
      button.classList.remove('is-loading');

      if(response == 1){
        swal('ERROR', 'datos no enviados' ,'error')
      }else if(response == 2){
        swal('Alerta', 'el grado ya existe', 'warning');
      }else{
        button.innerHTML = '';
        button.classList.add('is-success');
        button.appendChild(i);

        $('i').addClass('fas fa-check');
      }
    }
  })
}
