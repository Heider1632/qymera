$('#BtnAddPrimaryGroup').click(function(event){

  var button = event.target;

  var id_grade = $('#TxtSelectPrimaryName').val();

  var id_group = $('#TxtSelectPrimaryGroup').val();

  var code = id_grade.concat(id_group);

  var i = document.createElement('i');

  $.ajax({
    method: 'POST',
    url: 'http://localhost:8888/qymera/coordinator/home/createGroups/add/',
    data: {id_grade: id_grade, id_group: id_group, code: code},
    beforeSend: function(){
      button.classList.add('is-loading');

    },
    success: function(response){
      button.classList.remove('is-loading');

      button.innerHTML = '';

      if(response == 'error_1'){
        swal('ERROR', 'datos no enviados' ,'error')
      }else if(response == 'error_2'){
        button.classList.remove('is-info');
        button.classList.add('is-warning');
        button.appendChild(i);

        $('i').addClass('fas fa-exclamation-circle');
      }else if(response == 'error_3'){
        button.classList.add('is-success');
        button.appendChild(i);

        $('i').addClass('fas fa-check');
      }else{
        button.classList.remove('is-info');
        button.classList.add('is-danger');

        button.appendChild(i);

        $('i').addClass('fas fa-times');

        console.error('Algo salio mal');
      }
    }
  })


})

$('#BtnAddBalechorGroup').click(function(event){

  var button = event.target;

  var id_grade = $('#TxtSelectBalechorName').val();

  var id_group = $('#TxtSelectBalechorGroup').val();

  var code = id_grade.concat(id_group);

  var i = document.createElement('i');

  $.ajax({
    method: 'POST',
    url: 'http://localhost:8888/qymera/coordinator/home/createGroups/add/',
    data: {id_grade: id_grade, id_group: id_group, code: code},
    beforeSend: function(){
      button.classList.add('is-loading');

    },
    success: function(response){
      button.classList.remove('is-loading');
      button.innerHTML = '';

      if(response == 1){
        swal('ERROR', 'datos no enviados' ,'error')
      }else if(response == 2){

        button.classList.remove('is-success');

        button.classList.add('is-warning');
        button.appendChild(i);

        $('i').addClass('fas fa-exclamation-circle');
      }else{
        button.classList.add('is-success');
        button.appendChild(i);

        $('i').addClass('fas fa-check');
      }
    }
  })


})
