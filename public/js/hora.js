$('document').ready(function(){
    function hora(){
        $.ajax({
        type: 'GET',
        url: 'http://localhost:8888/qymera/core/bin/functions/hora.php',
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
