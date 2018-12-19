<?php if(isset($_POST['materia_id'])):
$grado = ($teacher->getGrado($_POST['materia_id']));
?>
  <div class="container is-hidden-desktop">
  <table class="table is-hoverable is-narrow is-fullwidth">
    <thead>
        <tr>
            <th>Grado</th>
            <th>Grupo</th>
            <th>Accion</th>
          </tr>
    </thead>
      <tbody>
            <?php foreach($grado as $g): ?>
              <tr>
              <td><?php echo $g['nombre_grado']?></td>
              <td><?php echo $g['nombre_grupo']?></td>
              <td><button class="button is-warning is-medium">
                <a href="unicStudent"><i class="fas fa-eye f-3x"></i></a>
              </button></td>
              </tr>
            <?php endforeach; ?>
      </tbody>
    </table>
  </div>
<?php endif; ?>
