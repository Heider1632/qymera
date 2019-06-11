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
        <div class="box">
          <h3 class="has-text-centered">Notas por lista de studiante.</h3>
        </div>
        <!-- input hidden to check the request data from header -->
        <input type="hidden" name="" id="TextIdActivity" value="<?php echo $view[9] ?>" />
        <input type="hidden" name="" id="TextIdGroup" value="<?php echo $view[11] ?>" />
        <input type="hidden" name="" id="TextIdMatter" value="<?php echo $view[7] ?>" />

        <?php 
        if(!empty($students)): ?>
          <table class="table is-hoverable is-narrow is-fullwidth">
            <thead>
              <tr>
                <th>#</th>
                <th>Foto</th>
                <th>Primer Nombre</th>
                <th>Segundo Nombre</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th><?php echo $activitys[0]['title'] ?></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach($students as $s):?>
                <tr>
                <!-- input hidden with the id students -->
                  <input 
                    type="hidden" 
                    class="inputIds"
                    name="inputIds[]"
                    value="<?php echo $s['id'] ?>"
                  />
                <td><?php echo $s['n']; ?></td>
                <td>
                  <?php if(empty($s['foto'])): ?>
                    <img src="<?php echo APP_URL ?>public/media/user-default.png" width="40" height="40"></img>
                  <?php else: ?>
                    <img src="<?php echo APP_URL ?>public/media/students/fotos/<?php echo $s['id']; ?>/<?php echo $s['foto']; ?>" width="40" height="40"></img>
                  <?php endif; ?>
                </td>
                <td><?php echo $s['first_name']; ?></td>
                <td><?php echo $s['second_name']; ?></td>
                <td><?php echo $s['first_lastname']; ?></td>
                <td><?php echo $s['second_lastname']; ?></td>
                <td>
                  <input 
                    type="num" 
                    min="0" 
                    max="10" 
                    class="input is-fullwidth inputNote" 
                    placeholder="nota" 
                  />
                </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        <?php else: ?>
        <div class="notification is-danger">
          Error al solicitar los datos, porfavor comuniquese con la administración
        </div>
        <?php endif;  ?>
 
        <a class="button is-fullwidth is-primary" id="BtnAddListNote">Save</a>
      </div>
    </div>
  </div>
