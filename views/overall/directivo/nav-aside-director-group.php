<aside class="menu is-hidden-mobile is-medium">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <a class="is-active">Menu</a>
    <li class="username">
      <a ><?php echo mb_strtoupper($_SESSION['nombre_completo']); ?></a>
    </li>
    <li>
      <a href="<?php echo APP_URL ?>directivo/home/">
        Inicio
      </a>
    </li>
    <li>
      <a href="<?php echo APP_URL; ?>directivo/directorgroup/add/">
        Añadir director de grupo<i class="fa fa-plus"></i>
      </a>
    </li>
    <li>
      <a href="<?php echo APP_URL; ?>directivo/directorgroup/edit/">
        Editar directores de grupos<i class="fa fa-edit"></i>
      </a>
    </li>
  </ul>
</aside>