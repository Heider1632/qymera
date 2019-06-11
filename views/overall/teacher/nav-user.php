<!-- START NAV -->
<nav class="navbar is-fixed-top nav-user">
  <div class="container">
      <div class="navbar-brand">
          <a class="navbar-item" href="<?php echo APP_URL; ?>home/">
              <img src="<?php echo APP_URL; ?>public/images/title-qymera.png" alt="Logo">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenu">
          <span></span>
          <span></span>
          <span></span>
          </span>
       </div>
       <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item is-active" href="<?php echo APP_URL; ?>teacher/home/">
                  Inicio
                </a>
                <?php if($_SESSION['director_grupo'] == '1'): ?>
                    <a class="navbar-item" href="director_grupo">
                        Director Grupo
                    </a>
                <?php endif; ?>
                <a class="navbar-item" href="<?php echo APP_URL; ?>default/calendario/">
                    Calendario
                </a>
                <a class="navbar-item" href="<?php echo APP_URL; ?>teacher/actividades/">
                    Actividades
                </a>
                <a class="navbar-item" href="<?php echo APP_URL; ?>teacher/notes/">
                    Notas
                </a>
                <a class="navbar-item" href="<?php echo APP_URL; ?>teacher/reports/">
                    Reportes
                </a>
                <a class="navbar-item button-badge" href="<?php echo APP_URL; ?>teacher/notifications/">
                    <i class="fas fa-bell"></i>
                    <span class="badge alert" id="span-notification">0</span>
                </a>
                <a class="navbar-item button-badge" href="<?php echo APP_URL; ?>teacher/compartir/">
                    <i class="fas fa-mail-bulk"></i>
                    <span class="badge alert" id="span-shared">0</span>
                </a>
            </div>
          </div>
        </div>
    </nav>
<!-- END NAV -->
