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
        <i class="fas fa-user m-l-5"></i>
        <?php echo mb_strtoupper($_SESSION['nombre_completo']); ?>
      </a>
    </div>
    <div class="navbar-end">
      <a class="navbar-item">
          Lectivo: <?php echo date('Y'); ?>
      </a>
      <a class="navbar-item m-l-20">
          <i class="fas fa-globe-americas"></i>
          Periodo: <?php echo $_SESSION['periodo_id']; ?>
      </a>

      <a class="navbar-item m-l-20">
          <i class="far fa-calendar-alt"></i>
          Semana: <?php echo strftime("%U"); ?>
      </a>
      <a class="navbar-item">
          <i class="fas fa-hourglass-half"></i>
          : <div id="hora"></div>
      </a>
    </div>
  </div>
  </div>
</nav>
