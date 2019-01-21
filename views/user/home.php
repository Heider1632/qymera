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
      <div class="column is-expanded">
        <!-- render template inf_teacher -->
          <section class="hero is-primary m-b-10">
            <div class="hero-body">
                <h1 class="title">
                  Hola, <?php echo mb_strtoupper($_SESSION['nombre_completo']); ?>, Bienvenido a Qymera
                </h1>
                <h2 class="subtitle">
                  ¿Qué quieres hacer hoy?
                </h2>
            </div>
          </section>
      </div>
    </div>
  </div>
