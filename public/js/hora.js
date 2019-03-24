$('document').ready(function(){
    //global variable
    var protocol = window.location.protocol;

    if(protocol === 'http:'){
        var $url = 'http://localhost:8888/qymera/';
    }else{
        var $url = 'https://qymera.net/';
    }

    function hora(){
        $.ajax({
        type: 'GET',
        url: $url + 'core/bin/functions/hora.php',
        before: function(){
          $('#hora').html("Hora:");
        },
        success: function($hora) {
            $('#hora').html($hora);
            setTimeout(hora(), 1000);
            }
        });
    }
    setTimeout(hora(), 1000);
});
