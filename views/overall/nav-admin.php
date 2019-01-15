<!-- START NAV -->
<nav class="navbar">
  <div class="container">
      <div class="navbar-brand">
          <a class="navbar-item" href="<?php echo APP_URL ?>admin/">
              <img src="<?php echo APP_URL ?>public/images/title-qymera.png" alt="Logo">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenu">
          <span></span>
          <span></span>
          <span></span>
          </span>
       </div>
       <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item is-active" href="<?php echo APP_URL ?>coordinator/home/">
                  Inicio
                </a>
                <a class="navbar-item" href="<?php echo APP_URL ?>default/calendario/">
                    <i class="far fa-calendar-times"></i>
                </a>
                <a class="navbar-item" href="<?php echo APP_URL ?>coordinator/config/">
                    <i class="fas fa-bars"></i>
                </a>
                <a class="navbar-item" href="<?php echo APP_URL ?>default/cerrarSesion/">
                    Salir
                </a>
              </div>
            </div>
        </div>
    </nav>
<!-- END NAV -->
