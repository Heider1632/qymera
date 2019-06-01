<?php
/*template home */
  /* navbar interface */
  include 'views/overall/teacher/nav-user.php';
  include 'views/overall/teacher/nav-tool.php';
?>
  <div class="container is-fluid">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/teacher/nav-aside.php'; ?>
      </div>
      <div class="column">
      <div class="box m-t-20">
      <?php foreach ($matters as $m): ?>
      <div class="notification is-info is-flex">
        <p class="subtitle"><?php echo $m['name_matter']; ?></p>

        <span class="icon m-l-20 is-right">
          <a class="button is-primary" href="<?php echo APP_URL . "teacher/actividades/nueva/" . $m['id_matter'] . "/";  ?>">
            <i class="fas fa-plus-square"></i>
          </a>
        </span>

      </div>
      <?php endforeach; ?>
      </div>
      <div class="notification is-primary is-centered">Actividades</div>
      <div class="columns is-desktop is-multiline">
        <?php if(!empty($activitys)): foreach($activitys as $activity): ?>
          <div class="column">
            <div class="card">
              <header class="card-header">
                <p class="card-header-title has-text-right m-l-50">
                  <?php echo $activity['title'] ?>
                </p>
                <p class="card-header-title has-text-left">
                  <?php echo $activity['type']; ?>
                </p>
              </header>
              <div class="card-content">
                <div class="content">
                  <p class="subtitle"><?php echo $activity['description']; ?></p>
                  <br>
                  <p class="subtitle"><?php echo $activity['name_indicator']; ?></p>
                  Fecha de finalizacion
                  <time onclick="agotime(<?php echo $activity['date_start']; ?>,<?php echo $activity['date_finish']; ?>, this)">
                  <?php echo $activity['date_finish']; ?>
                  </time>
                </div>
              </div>
              <footer class="card-footer">
                <a href="<?php echo APP_URL ?>teacher/actividades/uploadnote/<?php echo $activity['id'] ?>/" class="card-footer-item">Nota</a>
                <a href="<?php echo APP_URL ?>teacher/actividades/edit/<?php echo $activity['id'] ?>/" class="card-footer-item">Editar</a>
                <a href="<?php echo APP_URL ?>teacher/actividades/delete/<?php echo $activity['id'] ?>/" class="card-footer-item">Borrar</a>
                <a href="<?php echo APP_URL ?>teacher/actividades/uploadevidence/<?php echo $activity['id'] ?>/" class="card-footer-item">Evidencias</a>
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
