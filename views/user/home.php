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
        <!-- render template inf_teacher -->
          <section class="hero is-primary m-b-10">
            <div class="hero-body">
                <h1 class="title">
                  Bienvenido docente: <?php echo $_SESSION['nombre']; ?>
                </h1>
                <h2 class="subtitle">
                  Debajo encontrarás informacion correspondinte actual
                </h2>
            </div>
          </section>
          <div class="block is-hidden-mobile">
            <h1 class="title">Progreso de notas</h1>
            <progress class="progress is-success is-large" value="40" max="100"></progress>
          </div>
          <div class="tabs is-centered m-b-20 is-hidden-tablet is-hidden-desktop">
            <ul>
              <?php foreach ($materias as $m): ?>
                  <form id="handleMater_<?php echo $m['materia_id']; ?>" action="#" method="post">
                  <input type="hidden" name="materia_id" value="<?php echo $m['materia_id']?>"/>
                  <li><a href="javascript:{}" onclick="document.getElementById('handleMater_<?php echo $m['materia_id']; ?>').submit(); return false;"><?php echo $m['materia_nombre']; ?></a></li>
                  </form>
              <?php endforeach; ?>
            </ul>
          </div>
          <?php include 'html/user/grado.php'; ?>
      </div>
    </div>
  </div>
