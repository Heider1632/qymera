<?php
  //navigaton to//
  include 'views/overall/directivo/nav-directivo.php';
?>
  <div class="container">
    <div class="columns is-2">
      <div class="column is-one-third">
        <?php include 'views/overall/directivo/nav-aside-director-group.php'; ?>
      </div>
      <div class="column">
        <?php if(!empty($edit_director_group)): ?>

        <?php else: ?>
          <div class="notification is-warning">
            Ocurrio un error buscando el director de grupo
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php
  include 'html/overall/scripts.php';
?>