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
        <div class="box is-info">
          <h3 class="has-text-centered fs-20">Actividades del indicador</h3>
        </div>
        <?php
        $id_grade = $view[4];
        $id_matter = $view[6];
        $id_group = $view[8];

        $indicators = $teacher->getIndicatorsForNotes($id_grade, $id_matter);
        ?>

        <?php if(!empty($indicators)): ?>
          <table class="table is-narrow is-bordered is-fullwidth">
            <thead>
              <tr>
                <th>Nombre</th>
                <th>Desctiipcion</th>
                <th>Ponderacion</th>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              
            </tbody>
          </table>
        <?php else: ?>
          <div class="notification is-warning">
            No hay Actividades asociados al indicador.
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
