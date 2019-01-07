$('#btnEditToggle').on('click',function(){
  $.ajax({

  });
  $('#form-edit').slideToggle(function(){
    $('html, body').animate({
      scrollTop: $('#form-edit').offset().top
    }, 500);
  });
});

$('#btnDelToggle').on('click',function(){
  $('#form-del').slideToggle(function(){
    $('html, body').animate({
      scrollTop: $('#form-del').offset().top
    });
  });
});
