<?php
require_once('core/model/coexistence.php');
$coexistence = new Coexistence();
$fecha = DATE;
$periodo = $coexistence->periodo($fecha);
$_SESSION['id_periodo'] = $periodo[0]['id_periodo'];
?>
<aside class="menu is-hidden-mobile">
  <p class="menu-label">
    <div id="hora" class="fs-20"></div>
    <div id="period" class="fs-20"><?php echo $periodo[0]['nombre_periodo'] ?></div>
  </p>
  <ul class="menu-list">
    <li>
      </a>

      </a>
    </li>
    <li><a><?php echo $_SESSION['nombre']; ?></a></li>
  </ul>
  <p class="menu-label">
    Acciones
  </p>
  <ul class="menu-list">
    <li>
      <a class="is-active">Indicadores</a>
      <ul>
        <li><a href="<?php APP_URL ?>indicador">Indicadores</a></li>
        <li><a href="<?php APP_URL ?>libraryindicators">Libreria de Indicadores</a></li>
      </ul>
    </li>
    <li>
      <a class="is-active">Estudiantes</a>
      <ul>
        <li><a href="<?php APP_URL ?>groupStudent">Grupo</a></li>
        <li><a href="<?php APP_URL ?>unicStudent">Unico</a></li>
      </ul>
    </li>
    <li><a href="<?php APP_URL ?>areaplanes">Planes de area</a></li>
    <li><a href="<?php APP_URL ?>period">Periodo</a></li>
    <li><a href="<?php APP_URL ?>consolide">Consolidados</a></li>
  </ul>
</aside>
