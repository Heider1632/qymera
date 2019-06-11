<?php 
$id_grade = $view[7];
$id_matter = $view[9];
$id_group = $view[11];

$indicators = $teacher->getIndicatorsForNotes($id_grade, $id_matter, $id_group);
?>

<?php
/*template home */
  /* navbar interface */
  include 'views/overall/teacher/nav-user.php';
  include 'views/overall/teacher/nav-tool.php';
  ?>
  <div class="columns is-2">
    <div class="column is-one-quarter">
        <?php include 'views/overall/teacher/nav-aside.php'; ?>
    </div>
    <div class="column is-expanded">
    <div class="box">
        <h3 class="has-text-centered">Indicadores por asignatura</h3>
    </div>
    <br>
    <?php if(!empty($indicators)): ?>
    <div class="box">
        <?php foreach($indicators as $i): ?>
        <div class="wrapper">
        <div class="notification is-info m-b-20">
          <p 
            class="title preview">
            <?php echo $i['name_indicator']; ?>
          </p>
        </div>
        <?php $id_indicator = $i['id_indicator']; 
          $activitys = $teacher->getActivitysFromIndicatorId($id_indicator);
        ?>
        <div class="contenido">
            <?php if(!empty($activitys)): ?>
            <table class="table is-hoverable is-narrow is-fullwidth">
              <thead>
                <tr>
                  <th>Actividad</th>
                  <th>Porcentaje</th>
                  <th>Grado</th>
                  <th>Grupo</th>
                  <th>Fecha Inicio</th>
                  <th>Fecha Evaluacion</th>
                  <th>Fecha Final</th>
                  <th>Accion</th>
                </tr>
              </thead>
              <tbody>
              <?php foreach($activitys as $activity): ?>
                <tr>
                  <td><?php echo $activity['title']; ?></td>
                  <td><?php echo $activity['percentage'] . "%"; ?></td>
                  <td><?php echo $activity['name_grade']; ?></td>
                  <td><?php echo $activity['id_group']; ?></td>
                  <td><?php echo $activity['date_start']; ?></td>
                  <td><?php echo $activity['evaluate_date']; ?></td>
                  <td><?php echo $activity['date_finish']; ?></td>
                  <td>
                    <button class="button is-info is-medium">
                    <a 
                    href="<?php echo APP_URL ?>teacher/notes/type/<?php echo $view[3] ?>/preview/addnote/matter/<?php echo $id_matter ?>/activity/<?php echo $activity['id'] ?>/group/<?php echo $activity['id_groups'] ?>/student/0/">
                      <i class="fas fa-angle-right"></i>
                    </a>
                    </button>
                  </td>
                </tr>
              <?php endforeach; ?>
              </tbody>
              </table>
              <?php else: ?>
                <div class="notification is-danger">Error al solicitar los datos</div>
              <?php endif; ?>
            </div>
          </div>
        <?php endforeach; ?>
    <?php else: ?>
    <div class="notification is-warning">
        No hay indicadores asociados al grado y materia.
    </div>
    <?php endif; ?>
    </div>
</div>