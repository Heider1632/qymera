<?php
/*template home */
  /* navbar interface */
  include 'views/overall/nav-user.php';
  include 'views/overall/nav-tool.php';
?>
  <div class="container is-fluid">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/nav-aside.php'; ?>
      </div>
      <div class="column">
      <div class="box m-t-20">
      <?php foreach ($matters as $m): ?>
      <div class="notification is-info is-flex">
        <p class="subtitle"><?php echo $m['materia_nombre']; ?></p>

        <span class="icon m-l-20 is-right">
          <a class="button is-primary" href="<?php echo APP_URL . "teacher/actividades/nueva/" . $m['materia_id'] . "/";  ?>">
            <i class="fas fa-plus-square"></i>
          </a>
        </span>

      </div>
      <?php endforeach; ?>
      </div>
      <div class="notification is-primary is-centered">Actividades</div>
      <div class="columns is-desktop">
        <?php if(!empty($activitys)): foreach($activitys as $activity): ?>
          <div class="column">
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  <?php echo $activity['title'] . " -- " . $activity['type']; ?>
                </p>
              </header>
              <div class="card-content">
                <div class="content">
                  <p class="subtitle"><?php echo $activity['description']; ?></p>
                  <br>
                  <p class="subtitle"><?php echo $activity['name_indicator']; ?></p>
                  Fecha de finalizacion
                  <time onmouseover="agotime(<?php echo $activity['date_start']; ?>,<?php echo $activity['date_finish']; ?>, this)" 
                  datetime="<?php echo $activity['date_finish']; ?>">
                  <?php echo $activity['date_finish']; ?>
                  </time>
                </div>
              </div>
              <footer class="card-footer">
                <a href="#" class="card-footer-item">Nota</a>
                <a href="#" class="card-footer-item">Editar</a>
                <a href="#" class="card-footer-item">Borrar</a>
              </footer>
            </div>
          </div>
          <?php endforeach; else: ?>
          <div class="notification is-warning">No hay actividades creadas</div>
          <?php endif;?>
        </div>
      </div>
    </div>
  </div>
