<?php
require_once('core/model/coexistence.php');
$coexistence = new Coexistence();
$fecha = DATE;
$periodo = $coexistence->periodo($fecha);
$_SESSION['id_periodo'] = $periodo[0]['id_periodo'];
$_SESSION['nombre_periodo'] = $periodo[0]['nombre_periodo'];
?>
 <nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="container">
  <div class="navbar-menu">
    <div class="navbar-start">
      <a class="navbar-item">
          Lectivo: <?php echo date('Y'); ?>
      </a>
      <a class="navbar-item m-l-20">
          <i class="fas fa-globe-americas"></i>
          Periodo: <?php echo $_SESSION['id_periodo']; ?>
      </a>

      <a class="navbar-item m-l-20">
          <i class="far fa-calendar-alt"></i>
          Semana: <?php echo strftime("%U"); ?>
      </a>
      <a class="navbar-item">
          <i class="fas fa-hourglass-half"></i>
          <div id="hora"></div>
      </a>
    </div>
    <div class="navbar-end">
      <a class="navbar-item">
        <i class="fas fa-user m-l-5"></i>
        <?php echo mb_strtoupper($_SESSION['nombre_completo']); ?>
      </a>
      <!-- dropdown -->
        <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link">
                  Cuenta
            </a>
            <div class="navbar-dropdown">
              <a class="navbar-item" href="#">
                  <?php echo $_SESSION['nombre_completo']; ?>
              </a>
              <a class="navbar-item" href="<?php echo APP_URL; ?>teacher/perfil/<?php echo $_SESSION['id']; ?>/">
                  <p class="lead">Perfil</p>
              </a>
              <a class="navbar-item">
                  Configuraciones
              </a>
              <hr class="navbar-divider">
              <a class="navbar-item" href="<?php echo APP_URL; ?>default/cerrarSesion/">
                  Salir
              </a>
            </div>
          </div>
          <!-- profile navbar card-->
          <a class="m-t-5">
            <span><?php if (!empty($_SESSION['foto'])): ?>
              <img class="thumbnail" width="50" height="50" src="<?php echo APP_URL . $_SESSION['foto'] ?>" alt="<?php $_SESION['nombre'] ?>" />
                  <?php else: ?>
              <img class="thumbnail" width="50" height="50" src="<?php echo APP_URL; ?>public/media/user-default.png" alt="<?php $_SESION['nombre'] ?>" />
                  <?php endif; ?>
            </span>
          </a>
        </div>
      </div>
  </div>
</nav>
