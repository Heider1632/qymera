<?php
/*template home */
  /* navbar interface */
  include 'views/overall/nav-user.php';
  include 'views/overall/nav-tool.php';
  ?>
  <div class="container is-fluid">
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/nav-aside.php'; ?>
      </div>
      <div class="column">
        <!-- card to student information -->
        <?php if($_POST['id_student'] || $_POST['student_name']):
        $id_student = $_POST['id_student'];
        $students = ($teacher->studentDesc($id_student));
        $ind = ($teacher->getIndicadores($id_docente, $id_materia, $id_periodo));
        ?>
        <div class="field is-horizontal m-r-20">
          <div class="field-body">
            <div class="field">
              <?php foreach($students as $f): ?>
              <?php if(!empty($f['foto'])): ?>
                <td><img src="public/media/fotos/<?php echo $f['foto']; ?>" class="student-img" width="100" height="100"></td>
              <?php else: ?>
                <td><img src="public/media/fotos/user-default.png" class="student-img" width="100" height="100"></td>
              <?php endif; endforeach; ?>
            </div>
            <div class="form-student">
            <div class="field">
            <?php foreach($students as $e): ?>
            <p class="control is-expanded has-icons-left">
              <label class="label is-samll">Primer nombre</label>
              <input class="input" type="text" value="<?php echo $e['primer_nombre']; ?>" placeholder="primer_nombre" readonly>
            </p>
          </div>
          <div class="field">
            <p class="control is-expanded has-icons-left has-icons-right">
              <label class="label is-samll">Segundo nombre</label>
              <input class="input" type="text" value="<?php echo $e['segundo_nombre']; ?>" placeholder="segundo_nombre" readonly>
            </p>
          </div>

          <div class="field">
            <p class="control is-expanded has-icons-left has-icons-right">
              <label class="label is-samll">Primer apellido</label>
              <input class="input" type="text" value="<?php echo $e['primer_apellido']; ?>" placeholder="primer_apellido" readonly>
            </p>
          </div>

          <div class="field">
            <p class="control is-expanded has-icons-left has-icons-right">
              <label class="label is-samll">Segundo apellido</label>
              <input class="input" type="text" value="<?php echo $e['segundo_apellido']; ?>" placeholder="segundo_apellido" readonly>
            </p>
          </div>
          <?php if(!empty($ind)): foreach($ind as $i): ?>
            <input type="num" class="input is-small" min="0" max="10" name="nota[<?php echo $i['n']; ?>][<?php echo $e['id']; ?>]" id="nota" placeholder="ejemplo nota 7.4">
          <?php endforeach; ?>
            <hr>
            <div class="field is-grouped is-grouped-centered m-t-10 m-b-10">
              <p class="control">
                <a id="send-note" class="button is-primary">
                  Submit
                </a>
              </p>
              <p class="control">
                <a id="cancel-note" class="button is-light">
                  Cancel
                </a>
              </p>
            </div>
          <?php endif; endforeach; ?>
        </div>
      </div>
      </div>

      <?php else: ?>
        <p class="notification is-info m-r-20">Esperando...</p>
      <?php endif; ?>

      <!-- pagination to students -->
      <div class="box m-t-20 m-l-40 m-r-40">
      <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        <ul class="pagination-list m-l-20 m-r-20">
          <?php if(isset($idStudents)): foreach ($idStudents as $i): ?>
          <form id="handleStudent_<?php echo $i['id_student']; ?>" action="#" method="post">
          <input type="hidden" id="id_student" name="id_student" value="<?php echo $i['id_student']; ?>"/>
          <li class="list-id-s">
            <a class="pagination-link" href="javascript:{}" onclick="document.getElementById('handleStudent_<?php echo $i['id_student']; ?>').submit(); return false;" aria-label="Goto page <?php echo $i['n']; ?>"><?php echo $i['n']; ?></a>
          </li>
          </form>
        <?php endforeach; else: ?>
          <li><a class="pagination-link">Error</a></li>
        <?php endif; ?>
        </ul>
      </nav>
      </div>
      <!-- end pagination -->
      </div>
    </div>
  </div>
<?php
