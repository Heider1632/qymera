<aside class="menu is-hidden-mobile is-medium">
  <p class="menu-label">
    General
  </p>
  <ul class="menu-list">
    <a class="is-active">Menu</a>
    <ul>
    <li class="username">
      <a ><?php echo mb_strtoupper($_SESSION['nombre_completo']); ?></a>
    </li>
    <li>
      <a href="<?php echo APP_URL; ?>directivo/teacher/seen/">Docentes</a>
    </li>
    <li>
      <a 
      href="<?php echo APP_URL; ?>directivo/directorgroup/">
      Directores grupos
      </a>
    </li>
    <li>
      <a href="<?php echo APP_URL; ?>directivo/grades/">Grados</a>
    </li>
    <li>
      <a href="<?php echo APP_URL; ?>directivo/groups/">Grupos</a>
    </li>
  </ul>
  <p class="menu-label">
    Administración
  </p>

</aside>
