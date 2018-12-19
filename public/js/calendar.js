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

       $("#event-id").addClass("is-active");
    },
    windowResize: function(view) {
      swal('alerta', 'The calendar has adjusted to a window resize', 'warning');
    },
    events: '?view=events',
  });
});
