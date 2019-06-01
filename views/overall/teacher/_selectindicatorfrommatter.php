<?php 
$id_grade = $view[5];
$id_matter = $view[7];
$id_group = $view[9];

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
                      href="<?php echo APP_URL ?>teacher/notas/preview/addNote/matter/<?php echo $id_matter ?>/indicator/<?php echo $i['id_indicator']; ?>/group/<?php echo $id_group; ?>/student/0/">
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