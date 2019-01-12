$('document').ready(function(){
  $('#calendar').fullCalendar({
    height: 480,
    contentHeight: 480,
    aspectRatio: 2,
    header: {
      left: 'today, prev, next',
      center: 'title',
      right: 'month, basicWeek, basicDay, agendaWeek, agenaDay'
    },
    dayClick:function(date, jsEvent, view){
       $('#start_date').val(date.format());

       $("#event-modal").addClass("is-active");
    },
    windowResize: function(view) {
      console.log('size reajust');
    },
    events: 'http://localhost:8888/qymera/calendario/events',
    eventClick: function(calEvent, jsEvent, view){
      $('#id_event').val(calEvent.id);

      $('#titulo').val(calEvent.title);
      $('#start_date').html(calEvent.start);
      $('#end_date').html(calEvent.end);
      $('#body').text(calEvent.body);

      $("#event-modal").addClass("is-active");

    }
  });

  $('#addEvent').click(function(){

    var title = $('#titulo').val();
    var body = $('#body').val();
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();

    $.ajax({
      type: 'POST',
      url: 'http://localhost:8888/qymera/calendario/add/',
      data: {title: title, body: body, start_date: start_date, end_date: end_date},
      success: function(res){
        if(res == 1){
          setTimeout(function(){
            swal('success', 'evento añadido', 'success');
          }, 1000);

          $("#event-modal").removeClass("is-active");

          location.reload();
        }else{
          swal('error', 'sucedio algo insesperado', 'error');
        }
      }
    });

  });

  $('#modEvent').click(function(){
    var id_event = $('#id_event').val();
    var title = $('#titulo').val();
    var body = $('#body').val();
    var start_date = $('#start_date').val();
    var end_date = $('#end_date').val();

    $.ajax({
      type: 'POST',
      url: 'http://localhost:8888/qymera/calendario/edit/',
      data:{id_event: id_event, title: title, body: body, start_date: start_date, end_date: end_date},
      success: function(res){
        if(res == 1){
          swal('exito', 'evento editado', 'success');

          location.reload();
        }else{
          swal('error', 'no se pudo enviar los datos', 'error');
        }
      },
      error: function(error){
        console.log(error);
      }

    })

  });

  $('#delEvent').click(function(){
    var id_event = $('#id_event').val();

    $.ajax({
      type: 'POST',
      url: 'http://localhost:8888/qymera/calendario/del/',
      data:{ id_event: id_event},
      success: function(res){
        if(res == 1){
          swal('exito', 'evento eliminado', 'success');

          location.reload();
        }else{
          swal('error', 'no se pudo enviar los datos', 'error');
        }
      },
      error: function(error){
        console.log(error);
      }
    })

  });
});
