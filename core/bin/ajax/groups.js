function addGroup(event, res){
  var button = event.target;

  let id_group = $(this).parent('tr').next('.TxtSelectGroup');

  console.log(id_group);

  //var id_group = $('#TxtSelectGroup').val();

  var id_grade = res;

  var i = document.createElement('i');

  var code = id_grade + id_group;

  /*$.ajax({
    method: 'POST',
    url: 'http://localhost:8888/qymera/coordinator/home/createGroups/add/',
    data: {id_grade: id_grade, id_group: id_group, code: code},
    beforeSend: function(){
      button.classList.add('is-loading');

    },
    success: function(response){
      button.classList.remove('is-loading');

      if(response == 1){
        swal('ERROR', 'datos no enviados' ,'error')
      }else if(response == 2){

        button.classList.remove('is-success');
        button.innerHTML = '';
        button.classList.add('is-warning');
        button.appendChild(i);

        $('i').addClass('fas fa-exclamation-circle');
      }else{
        button.innerHTML = '';
        button.classList.add('is-success');
        button.appendChild(i);

        $('i').addClass('fas fa-check');
      }
    }
  })*/
}
