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
        <div class="box">
          <h3 class="has-text-centered">Notas por studiante.</h3>
        </div>
        <div class="columns is-2">
        <div class="column is-half">
          <?php if(!empty($students)): ?>
          <div class="card">
            <div class="card-image">
              <figure class="image is-4by3">
                <img 
                  src="https://bulma.io/images/placeholders/1280x960.png" 
                  alt="Placeholder image"
                >
              </figure>
            </div>
            <div class="card-content">
              <div class="media">
                <div class="media-left">
                  <figure class="image is-48x48">
                    <img 
                      src="https://bulma.io/images/placeholders/96x96.png" 
                      alt="Placeholder image"
                    >
                  </figure>
                </div>
                <div class="media-content">
                  <?php $i = $view[11]; ?>
                  <p class="title is-4"><?php echo $students[$i]['first_name']; ?></p>
                  <p class="subtitle is-6"><?php echo $students[$i]['first_lastname']; ?></p>
                </div>
              </div>

              <div class="content">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Phasellus nec iaculis mauris. <a>@bulmaio</a>.
              </div>
            </div>
          </div>
          <?php else: ?>
            <div class="notification is-danger">
              No hay estudiantes en el grupo seleccionado
            </div>
          <?php endif; ?>
        </div>
        <div class="column">
        <!-- input hidden to form  -->
        <input type="hidden" id="TextIdActivity" value="<?php echo $activity['id'] ?>" />
        <input type="hidden" id="TextIdIndicator" value="<?php echo $id_indicator ?>" />
        <input type="hidden" id="TextIdStudent" value="<?php echo $view[11] ?>" />
        <input type="hidden" id="TextIdGroup" value="<?php echo $id_group ?>" />
        <input type="hidden" id="TextIdMatter" value="<?php echo $id_matter ?>" />
          <?php foreach ($activitys as $activity): ?>
                <div class="card m-b-10">
                   <header class="card-header">
                    <p class="card-header-title">
                      <?php echo $activity['title'] . "&/n" . $activity['type']; ?>
                    </p>
                    </header>
                    <div class="card-content">
                      <div class="content">
                        <?php echo $activity['description']; ?>
                        <time>
                          <?php echo $acitvity['date_start']; ?>
                        </time>
                        <time>
                          <?php echo $acitvity['date_finish']; ?>
                        </time>
                      </div>
                    </div>
                    <footer class="card-footer">
                      <input 
                        class="input inputNote is-info m-t-10 m-l-10 m-r-10 m-b-10 is-one-quarter" 
                        type="num"
                        min="0"
                        max="10"
                        placeholder="nota"
                        required
                      />
                    </footer>
                </div>
            <?php endforeach; ?>
        </div>
      </div>
      <a class="button is-fullwidth is-primary" href="#" id="BtnAddNote">Save</a>
      <?php if(!empty($students)): ?>
        <div class="tabs is-fullwidth">
          <ul>
            <li>
              <a href="<?php echo APP_URL ?>teacher/notas/preview/addNote/matter/<?php echo $id_matter ?>/activity/<?php echo $id_activity ?>/group/<?php echo $id_group ?>/student/<?php echo ($view[11] - 1 > 0) ? $view[11] - 1 : 0 ?>/">
                <span class="icon"><i class="fas fa-angle-left" aria-hidden="true"></i></span>
                <span>Left</span>
              </a>
            </li>
            <li>
              <a href="<?php echo APP_URL ?>teacher/notas/preview/addNote/matter/<?php echo $id_matter ?>/activity/<?php echo $id_activity ?>/group/<?php  echo $id_group ?>/student/<?php echo ($view[11] + 1 < count($students)) ? $view[11] + 1 : $view[11] ?>/">
                <span>Right</span>
                <span class="icon"><i class="fas fa-angle-right" aria-hidden="true"></i></span>
              </a>
            </li>
          </ul>
        </div>
      <?php else: ?>
        <div class="notification is-danger">Error no hay estudiantes una lista de estudiantes activa porfavor comuniquese con la administración.</div>
      <?php endif; ?>
      </div>
    </div>
  </div>
