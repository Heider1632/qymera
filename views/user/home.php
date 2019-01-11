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
        <!-- render template inf_teacher -->
          <section class="hero is-primary m-b-10">
            <div class="hero-body">
                <h1 class="title">
                  Bienvenido docente: <?php echo $_SESSION['nombre_completo']; ?>
                </h1>
                <h2 class="subtitle">
                  Debajo encontrarás informacion correspondinte actual
                </h2>
            </div>
          </section>
      </div>
    </div>
  </div>
