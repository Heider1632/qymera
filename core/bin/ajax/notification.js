$(document).ready(function(){
  $.ajax({
    method:'GET',
    url: 'http://localhost:8888/qymera/core/bin/functions/count-notification.php',
    success: function(res){
      $('#span-notification').text(res);
    },
    error: function(error){
      console.log(error);
    }
  });

  $.ajax({
    method:'GET',
    url: 'http://localhost:8888/qymera/core/bin/functions/count-shared.php',
    success: function(res){
      $('#span-shared').text(res);
    },
    error: function(error){
      console.log(error);
    }
  });
})
