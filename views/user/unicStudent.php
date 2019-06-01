<div class="columns is-2">
  <div class="column is-one-quarter">
      <?php include 'views/overall/teacher/nav-aside.php'; ?>
  </div>
  <div class="column">
      <div class="box">
          <h3 class="has-text-centered"><?php echo "GRADO: " . $view[4] . " GRUPO: " . $view[6] ?></h3>
      </div>   
      <br>
        <!-- card to student information -->
      <?php 
        $id_group = $view[2];

        $students = $coexistence->getEstudiantes($id_group);

      ?>

      <div class="box is-info">Muy pronto</div>

      <!-- pagination to students -->
      <div class="box m-t-20 m-l-40 m-r-40">
      <nav class="pagination is-centered" role="navigation" aria-label="pagination">
        <ul class="pagination-list m-l-20 m-r-20">
          <?php if(!empty($students)): ?>
          <?php foreach ($students as $s):  ?>
          <li class="list-id-s">
            <a 
              class="pagination-link" 
              href="<?php echo APP_URL ?>teacher/individual/<?php echo $view[2]; ?>/grado/<?php echo $view[4]; ?>/grupo/<?php echo $view[6]; ?>/n/<?php echo $s['n'] ?>/">
              <?php echo $s['n']; ?>
            </a>
          </li>
          </form>
          <?php endforeach; else: ?>
          <li><a class="pagination-link is-danger">Error</a></li>
        <?php endif; ?>
        </ul>
      </nav>
      </div>
      <!-- end pagination -->
    </div>
 </div>
