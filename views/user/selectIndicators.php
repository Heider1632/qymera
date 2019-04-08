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
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($indicators as $i): ?>
                <tr>
                  <td><?php echo $i['name_indicator']; ?></td>
                  <td>
                    <a 
                      class="button" 
                      href="<?php echo APP_URL ?>teacher/notas/preview/addNote/indicator/<?php echo $i['id_indicator']; ?>/group/<?php echo $id_group; ?>/">
                      <i class="fas fa-plus-circle"></i>
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <div class="notification is-warning">
            No hay indicadores asociados al grado y materia.
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
