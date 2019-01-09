$('#btnEditToggle').on('click',function(e){

  e.preventDefault();

  $('#form-edit').removeClass('is-hidden');

  $('#form-edit').slideToggle(function(){
    $('html, body').animate({
      scrollTop: $('#form-edit').offset().top
    });
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
        url: 'http://localhost:8888/qymera/indicador/del/',
        data: {id_ind: res},
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
    }else{
      Swal({
        position: 'bottom-end',
        title: 'has cancelado la operación.',
        type: 'info'
      })
    }
  })

}
