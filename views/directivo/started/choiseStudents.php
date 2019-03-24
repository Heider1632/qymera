<?php include 'views/overall/directivo/nav-config.php'; ?>
<div class="void">
  <div class="columns is-2">
    <div class="column">
      <h1 class="title">Primaria</h1>
      <?php if(!empty($primary_groups)): ?>
      <form>
        <table class="table is-hoverable is-fullwidth">
          <thead>
            <tr>
              <th>Grado</th>
              <th>Grupo</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($primary_groups as $primary): ?>
            <tr>
              <td><?php echo $primary['nombre_grado']; ?></td>
              <td><?php echo $primary['nombre_grupo']; ?></td>
              <td><a class="button is-info is-small"href="<?php echo APP_URL ?>directivo/home/importStudents/grade/<?php echo $primary['nombre_grado'] ?>/group/<?php echo $primary['nombre_grupo'] ?>/">Añadir<i clas="fas fa-plus"></a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </form>
    <?php else: ?>
      <div class="notification is-warning">No hay grupos de primaria creados.</div>
    <?php endif; ?>
    </div>
    <div class="column">
      <h1 class="title">Bachillerato</h1>
      <?php if(!empty($balechor_groups)): ?>
      <form>
        <table class="table is-hoverable is-fullwidth">
          <thead>
            <tr>
              <th>Grado</th>
              <th>Grupo</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($balechor_groups as $balechor): ?>
            <tr>
              <td><?php echo $balechor['nombre_grado']; ?></td>
              <td><?php echo $balechor['nombre_grupo']; ?></td>
              <td><a class="button is-info is-small" href="<?php echo APP_URL ?>directivo/home/importStudents/grade/<?php echo $balechor['nombre_grado'] ?>/group/<?php echo $balechor['nombre_grupo'] ?>/">Añadir<i clas="fas fa-plus"></button></a>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </form>
      <?php else: ?>
        <div class="notification is-warning">No hay grupos de primaria creados.</div>
      <?php endif; ?>
    </div>
  </div>
</div>
<a class="button is-info is-medium button-bottom-right" href="<?php echo APP_URL ?>directivo/home/createteacher/">Siguiente<i class="fas fa-arrow-right"></i></button>
<a class="button is-info is-medium button-bottom-left" href="<?php echo APP_URL ?>directivo/home/creategroups/"><i class="fas fa-arrow-left"></i>Atrás</a>
