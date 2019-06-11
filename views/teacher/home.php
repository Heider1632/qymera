<?php
/*template home */
  /* navbar interface */
  include 'views/overall/teacher/nav-user.php';
  include 'views/overall/teacher/nav-tool.php';
?>
    <div class="columns is-2">
      <div class="column is-one-quarter">
        <?php include 'views/overall/teacher/nav-aside.php'; ?>
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
          <div class="box">
            <div class="card">
              <header class="card-header">
                <p class="card-header-title">
                  Component
                </p>
                <a href="#" class="card-header-icon" aria-label="more options">
                  <span class="icon">
                    <i class="fas fa-angle-down" aria-hidden="true"></i>
                  </span>
                </a>
              </header>
              <div class="card-content">
                <div class="content">
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec iaculis mauris.
                  <a href="#">@bulmaio</a>. <a href="#">#css</a> <a href="#">#responsive</a>
                  <br>
                  <time datetime="2016-1-1">11:09 PM - 1 Jan 2016</time>
                </div>
              </div>
              <footer class="card-footer">
                <a href="#" class="card-footer-item">Save</a>
                <a href="#" class="card-footer-item">Edit</a>
                <a href="#" class="card-footer-item">Delete</a>
              </footer>
            </div>
          </div>
      </div>
    </div>
