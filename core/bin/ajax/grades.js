$('#BtnAddNewGrade').click(function(e){
  var $this = $(this);
  $this.text('loading');

  $this.addClass('is-loading');

  $.ajax({
    method: 'POST',
    url: '',
    data: {},
    success: function(response){
      if(response == 1){

      }else{
        $this.removeClass('is-loading');
        $this.text('');
        $this.removeClass('is-info');
        $this.addClass('is-success');
        $this.append( "<i class='fas fa-check'></i>" );

      }
    }


  })

  e.preventDefault();
})
