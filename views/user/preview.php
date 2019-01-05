<?php
/*template home */
  /* navbar interface */
  include 'views/overall/nav-user.php';
?>
  <div class="container is-fluid">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/nav-aside.php'; ?>
      </div>
      <div class="column">
        <div class="tabs is-centered m-t-20 is-large">
          <ul>
            <?php foreach ($materias as $m): ?>
                <form id="handleMater_<?php echo $m['materia_id']; ?>" action="#" method="post">
                <input type="hidden" name="id_materia" value="<?php echo $m['materia_id']?>"/>
                <li><a href="javascript:{}" onclick="document.getElementById('handleMater_<?php echo $m['materia_id']; ?>').submit(); return false;"><?php echo $m['materia_nombre']; ?></a></li>
                </form>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- divider -->
        <?php if(isset($_POST['id_materia'])):
          $grados = ($teacher->getGrado($_POST['id_materia']));
          ?>
        <div class="block">
          <?php foreach($grados as $g): ?>
            <p class="notification is-info">
                  <?php echo "grado: " . $g['nombre_grado'] . " grupo: " . $g['nombre_grupo']; ?>

                  <span class="icon m-l-20">
                    <a class="button is-primary" href="notas&action=viewNotes&id_grado=<?php echo urlencode($g['id_grado']); ?>&id_grupo=<?php echo urlencode($g['id_grupo']); ?>&id_materia=<?php echo urlencode($_POST['id_materia']); ?>">
                      <i class="fas fa-list-alt"></i>
                    </a>
                  </span>

                  <span class="icon m-l-20">
                    <a class="button is-primary" href="notas&action=viewAdd&id_grado=<?php echo urlencode($g['id_grado']); ?>&id_grupo=<?php echo urlencode($g['id_grupo']); ?>&id_materia=<?php echo urlencode($_POST['id_materia']); ?>">
                      <i class="fas fa-plus-square"></i>
                    </a>
                  </span>

                  <span class="icon m-l-20">
                    <a class="button is-primary" href="notas&action=viewEdit&id_grado=<?php echo urlencode($g['id_grado']); ?>&id_grupo=<?php echo urlencode($g['id_grupo']); ?>&id_materia=<?php echo urlencode($_POST['id_materia']); ?>">
                      <i class="fas fa-pen-square"></i>
                    </a>
                  </span>

            </p>
          <?php endforeach; endif; ?>
        </div>
      </div>
    </div>
  </div>
