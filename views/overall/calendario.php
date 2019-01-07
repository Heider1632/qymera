<?php
  /* template calendar */
    /* interface navigation*/
    if($_SESSION['cargo'] == '2'){
      include 'views/overall/nav-user.php';
    }else{
      include 'views/overall/nav-admin.php';
    }

    /* information bar*/
    include 'views/overall/bar_inf.php';
?>
    <div class="container m-t-20">
      <div id="calendar"></div>
    </div>

    <!-- modal calendar to events -->
    <div id="event-id" class="modal modal-fx-3dSignDown">
        <div class="modal-background" style="background-image:url('<?php echo APP_URL; ?>public/images/hero-aside.jpg')"></div>
        <div class="modal-content">
            <!-- content -->
            <div class="form">
              <h1 class="is-medium">Añadir un evento</h1>
              <hr>
              <input type="hidden" id="id_event" />
              <div class="field">
                <label class="label is-medium">Título</label>
                <div class="control">
                  <input class="input is-small" type="text" id="titulo" placeholder="Titulo del evento" required>
                </div>
              </div>

              <div class="field">
                <label class="label is-medium">Fecha Inicio</label>
                <div class="control">
                  <input class="input is-small" type="date" id="start_date" required>
                </div>
              </div>

              <div class="field">
                <label class="label is-medium">Fecha Cierre</label>
                <div class="control">
                  <input class="input is-small" type="date" id="end_date" required>
                </div>
              </div>

              <div class="field">
                <strong>Campo opcional</strong>
                <label class="label is-medium">Descripcion</label>
                <div class="control">
                  <textarea name="desc" id="body" placeholder="Descripcion del evento"></textarea>
                </div>
              </div>

              <button id="addEvent" class="button is-success">Añadir</button>
              <button id="modEvent" class="button is-info">Modificar</button>
              <button id="delEvent" class="button is-danger">Borrar</button>
            </div>
            <!-- end content -->
        </div>
        <button class="modal-close is-large" aria-label="close"></button>
    </div>

    <script language="javascript">
    $('#addEvent').click(function(){

      var title = $('#titulo').val();
      var body = $('#body').val();
      var start_date = $('#start_date').val();
      var end_date = $('#end_date').val();

      var action = 'add';

      $.ajax({
        type: 'POST',
        url: '?view=events',
        data: {title: title, body: body, start_date: start_date, end_date: end_date, action: action},
        success: function(res){
          if(res == 1){
            setTimeout(function(){
              swal('success', 'evento añadido', 'success');
            }, 1000);

            $("#event-id").removeClass("is-active");

            location.reload();
          }else{
            swal('error', 'sucedio algo insesperado', 'error');
          }
        }
      });

    });

    $('#modEvent').click(function(){
      var id_event = $('#id_event').val();

    });

    $('#delEvent').click(function(){
      var id_event = $('#id_event').val();

    });
    </script>
