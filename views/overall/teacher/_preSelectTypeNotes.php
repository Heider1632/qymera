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
          <h3 class="has-text-centered">Tipo de notas</h3>
        </div>
        <div class="box">
          <div class="columns is-2">
            <div class="column">
              <a
                href="<?php echo APP_URL ?>teacher/notes/type/list/"
                class="button is-info is-fullwidth"
                >
                <i class="fas fa-list"></i>
              </a>
            </div>
            <div class="column">
              <a
                href="<?php echo APP_URL ?>teacher/notes/type/unic/"
                class="button is-info is-fullwidth"
                >
                <i class="fas fa-user"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
