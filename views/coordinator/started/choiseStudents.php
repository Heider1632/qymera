<div class="void">
  <div class="columns is-2">
    <div class="column">
      <h1 class="title">Primaria</h1>
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
              <td><a class="button is-info is-small"href="<?php echo APP_URL ?>coordinator/home/importStudents/grade/<?php echo $primary['nombre_grado'] ?>/group/<?php echo $primary['nombre_grupo'] ?>/">Añadir<i clas="fas fa-plus"></a></td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </form>
    </div>
    <div class="column">
      <h1 class="title">Bachillerato</h1>
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
              <td><a class="button is-info is-small" href="<?php echo APP_URL ?>coordinator/home/importStudents/grade/<?php echo $balechor['nombre_grado'] ?>/group/<?php echo $balechor['nombre_grupo'] ?>/">Añadir<i clas="fas fa-plus"></button></a>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </form>
    </div>
  </div>
</div>
