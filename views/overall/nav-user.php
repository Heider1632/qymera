<!-- START NAV -->
<nav class="navbar">
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
                <a class="navbar-item is-active" href="<?php echo APP_URL; ?>home/">
                  Inicio
                </a>
                <?php if($_SESSION['director_grupo'] == '1'): ?>
                    <a class="navbar-item" href="director_grupo">
                        Director Grupo
                    </a>
                <?php endif; ?>
                <a class="navbar-item" href="<?php echo APP_URL; ?>calendario/">
                    Calendario
                </a>
                <a class="navbar-item" href="<?php echo APP_URL; ?>actividades/">
                    Actividades
                </a>
                <a class="navbar-item" href="<?php echo APP_URL; ?>notifications/">
                  <span class="badge is-badge-success is-badge-outlined" data-badge="8">
                      <i class="fas fa-bell"></i>
                  </span>
                </a>
                <!-- profile navbar card-->
                <!-- dropdown -->
                  <div class="navbar-item has-dropdown is-hoverable">
                      <a class="navbar-link">
                            Cuenta
                      </a>
                      <div class="navbar-dropdown">
                        <a class="navbar-item" href="#">
                            <?php echo $_SESSION['nombre_completo']; ?>
                        </a>
                          <a class="navbar-item" href="<?php echo APP_URL; ?>perfil/<?php echo $_SESSION['id']; ?>">
                              <p class="lead">Perfil</p>
                          </a>
                          <a class="navbar-item">
                              Configuraciones
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item" href="<?php echo APP_URL; ?>cerrarSesion/">
                              Salir
                          </a>
                        </div>
                      </div>
                      <a class="m-t-5">
                        <span><?php if(!empty($_SESSION['foto'])): ?>
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
<!-- END NAV -->
