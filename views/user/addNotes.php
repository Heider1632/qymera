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
                  <p class="title is-4">John Smith</p>
                  <p class="subtitle is-6">@johnsmith</p>
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
          <div class="columns">
            <?php foreach ($activitys as $activity): ?>
              <div class="column">
                <div class="card">
                   <header class="card-header">
                   <input type="hidden" id="TextIdActivity" value="<?php echo $activity['id'] ?>" />
                   <input type="hidden" id="TextIdIndicator" value="<?php echo $view[4] ?>" />
                   <input type="hidden" id="TextIdStudent" value="<?php echo $view[8] ?>" />
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
                        required
                      />
                      <a href="#" id="BtnAddNote" class="card-footer-item">Save</a>
                    </footer>
                </div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <?php if(!empty($students)): ?>
        <?php foreach($students as $student): ?>

        <?php endforeach;?>
      <?php else: ?>
        <div class="notification is-danger">Error no hay estudiantes una lista de estudiantes activa porfavor comuniquese con la administración.</div>
      <?php endif; ?>
      </div>
    </div>
  </div>
