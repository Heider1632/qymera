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
        <?php
        if($_GET):
        $id_grado = $view[3];
        $id_grupo = $view[5];

        $estudiantes = ($coexistence->getEstudiantes($id_grado, $id_grupo));
        if(!empty($estudiantes)): ?>
          <table class="table is-hoverable is-narrow is-fullwidth">
            <thead>
              <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($estudiantes as $s):?>
                <tr>
                <td><?php echo $s['n']; ?></td>
                <td>
                  <?php if(empty($s['foto'])): ?>
                    <img src="<?php echo APP_URL ?>public/media/user-default.png" width="40" height="40"></img>
                  <?php else: ?>
                    <img src="<?php echo APP_URL ?>public/media/students/fotos/<?php echo $s['id']; ?>/<?php echo $s['foto']; ?>" width="40" height="40"></img>
                  <?php endif; ?>
                </td>
                <td><?php echo $s['primer_nombre']; ?></td>
                <td><?php echo $s['segundo_nombre']; ?></td>
                <td><?php echo $s['primer_apellido']; ?></td>
                <td><?php echo $s['segundo_apellido']; ?></td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
        <div class="notification is-danger">
          Error al solicitar los datos, porfavor comuniquese con la administración
        </div>
        <?php endif; else: ?>
          <div class="notification is-danger">error al enviar los datos</div>
        <?php endif; ?>
      </div>
    </div>
  </div>
