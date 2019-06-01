<?php
  //navigaton to//
  include 'views/overall/directivo/nav-directivo.php';
?>
<div class="section">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/directivo/nav-aside-directivo.php'; ?>
      </div>
      <div class="column is-expanded">
      <div class="box">
        <h3 class="has-text-centered">Bachillerato</h3>
      </div>
      <?php if(!empty($balechor_groups)): ?>
        <div class="columns is-multiline">
            <?php foreach($balechor_groups as $b_g): ?>
                <div class="column">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            Grupo
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content">
                            <h3>Grado: <?php echo $b_g['name_grade'] . " Grupo:" .  $b_g['name_group']; ?></h3>
                        </div>
                    </div>
                    <footer class="card-footer">
                        <a 
                        href="<?php echo APP_URL ?>directivo/groups/primary/<?php echo $b_g['id_group'] ?>/"
                        class="button is-primary is-fullwidth">
                            <i class="fas fa-eye"></i>
                        </a>
                    </footer>
                </div>
                </div>
            <?php endforeach; ?>
        </div>
        <?php else: ?>
            <div class="notification is-warning">No hay grupos creados porfavor comuniquese con el administrador de base de datos para que habilite la depuracion de datos</div>
        <?php endif; ?>
      </div>
    </div>
</div>
