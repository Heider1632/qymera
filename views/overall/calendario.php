<?php
  /* template calendar */
    /* interface navigation*/
    if($_SESSION['cargo'] == '2'){
      include 'views/overall/teacher/nav-user.php';
    }else{
      include 'views/overall/directivo/nav-directivo.php';
    }
    include 'views/overall/teacher/nav-tool.php';
    ?>
    <div class="container is-fluid">
      <div class="columns is-2">
        <div class="column is-one-quarter">
          <?php include 'views/overall/teacher/nav-aside.php'; ?>
        </div>
        <div class="column">
          <div class="m-t-25 m-l-20 m-r-20">
            <!-- render calendar -->
            <div id="calendar"></div>
          </div>
        </div>
      </div>
    </div>

    <!-- modal calendar to events -->
    <div id="event-modal" class="modal modal-fx-3dSignDown">
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
