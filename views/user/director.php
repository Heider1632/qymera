<?php
/*template home */
  /* navbar interface */
  include 'views/overall/nav-user.php';
?>
  <div class="container is-fluid">
    <div class="columns is-2">
      <div class="column is-one-third">
        <?php include 'views/overall/nav-aside.php'; ?>
      </div>
      <div class="column">
        <div class="tabs is-centered m-b-20">
          <ul>
            <?php foreach ($grades as $gc): ?>
                <form id="handleGrade" action="#" method="post">
                <input type="hidden" name="id_grado" value="<?php echo $gc['id_grado']; ?>"/>
                <input type="hidden" name="id_grupo" value="<?php echo $gc['id_grupo']; ?>"/>
                <li>
                  <a href="javascript:{}" onclick="document.getElementById('handleGrade').submit(); return false;"><?php echo $gc['nombre_grado']; ?> : <?php echo $gc['nombre_grupo']; ?> </a>
                </li>
                </form>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- table -->
        <?php if (isset($_POST['id_grado'])):
          $id_grado = $_POST['id_grado'];
          $id_grupo = $_POST['id_grupo'];
          $studentsC = ($director_grupo->getStudentsC($id_grado, $id_grupo));
          $matterC = ($director_grupo->getMatterC($id_grado, $id_grupo));
          if (!empty($studentsC)): ?>
          <table class="table is-hoverable is-fullwidth">
            <thead>
              <tr>
                <th>foto</th>
                <th>primer nombre</th>
                <th>segundo nombre</th>
                <th>primer apellido</th>
                <th>segundo apellido</th>
                <?php foreach($matterC as $matters): ?>
                <th><?php echo $matters['nombre']; ?></th>
                <?php endforeach; ?>
                <th>Acciones</th>
              </tr>
            </thead>
            <tbody>
            <?php foreach ($studentsC as $s): ?>
                <tr>
                  <?php if (!empty($s['foto'])): ?>
                    <td><img src="public/media/fotos/<?php echo $f['foto']; ?>" class="student-img" width="100" height="100"></td>
                  <?php else: ?>
                    <td><img src="public/media/fotos/user-default.png" class="student-img" width="100" height="100"></td>
                  <?php endif; ?>
                  <td><?php echo $s['primer_nombre']; ?></td>
                  <td><?php echo $s['segundo_nombre']; ?></td>
                  <td><?php echo $s['primer_apellido']; ?></td>
                  <td><?php echo $s['segundo_apellido']; ?></td>
                  <td>
                    <a href="<?php echo "editStudent" ?>&id_student=<?php echo $s['id_student']; ?>">Editar</a>
                  </td>
                </tr>
            <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
          <div class="notification is-warning">
            Error al solicitar al grado y grupo
          </div>
        <?php endif; else: ?>
          <div class="notification is-info">Esperando...</div>
      <?php endif; ?>
      </div>

      </div>
    </div>
  </div>
<?php
/*template home */
  /* navbar interface */
  include 'html/overall/nav-user.php';
  /*bar information */
  include 'html/overall/bar_inf.php';
?>
<div class="container">

  </div>
  <div class="columns">
