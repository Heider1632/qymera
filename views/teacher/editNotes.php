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
        if($_GET):
        $id_grado = urldecode($_GET['id_grado']);
        $id_grupo = urldecode($_GET['id_grupo']);
        $id_materia = urldecode($_GET['id_materia']);
        $id_docente = $_SESSION['id'];
        $id_periodo = $_SESSION['id_periodo'];
        $estudiantes = ($coexistence->getEstudiantes($id_grado, $id_grupo));
        $indicadores = ($teacher->getIndicadores($id_docente, $id_materia, $id_periodo));
        $notes = ($teacher->getNotes($id_materia, $id_grado, $id_grupo, $indicadores));
        ?>
          <?php if(!empty($notes)): ?>
          <form action="editNotes&id_grado=<?php echo urlencode($id_grado); ?>&id_grupo=<?php echo urlencode($id_grupo); ?>" method="POST">
          <input type="hidden" name="id_materia" value="<?php echo $id_materia; ?>" />
          <table class="table is-hoverable is-narrow is-fullwidth">
            <thead>
              <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <?php if(!empty($indicadores)): foreach($indicadores as $indicators): ?>
                  <th class="th"><?php echo $indicators['n']; ?> <span class="tooltip" data-tooltip="<?php echo $indicators['nombre']; ?>"></span></th>
                <?php endforeach; endif; ?>
              </tr>
            </thead>
            <tbody>
              <?php foreach($estudiantes as $s):?>
                <tr>
                <td><?php echo $s['n']; ?></td>
                <td>
                  <?php if(empty($s['foto'])): ?>
                    <img src="vistas/media/fotos/user-default.png" width="40" height="40"></img>
                  <?php else: ?>
                    <img src="vistas/media/fotos/<?php echo $s['foto']; ?>" width="40" height="40"></img>
                  <?php endif; ?>
                </td>
                <td><?php echo $s['primer_nombre']; ?></td>
                <td><?php echo $s['segundo_nombre']; ?></td>
                <td><?php echo $s['primer_apellido']; ?></td>
                <td><?php echo $s['segundo_nombre']; ?></td>
                <?php //if(!empty($notes)): foreach($notes as $n): ?>
                  <!--<td><input class="input is-focused" type="num" min="0" max="10" name="note[<?php //echo $s['id']; ?>][<?php //echo $i['n']; ?>]" value="<?php //echo $n['nota'] ?>"/></td>-->
                <?php //endforeach; endif; ?>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <button type="submit" class="button is-success is-medium is-fullwidth" >Enviar</button>
          <hr>
          <button type="button" class="button is-danger is-medium is-fullwidth" onclick="refresh()">Cancelar</button>
          </form>
        <?php else: ?>
        <div class="notification is-danger m-t-20">
          Todavía no se han asignado notas para este grado y grupo
        </div>
        <?php endif; else:  ?>
          <div class="notification is-danger m-t-20">error al enviar los datos</div>
        <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
