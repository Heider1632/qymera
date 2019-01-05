<?php
  require_once('core/model/usuario.php');
  $user = new Usuario();

  $userphoto = ($user->getPhoto());
?>
<!-- START NAV -->
<nav class="navbar">
  <div class="container">
      <div class="navbar-brand">
          <a class="navbar-item" href="../">
              <img src="public/images/title-qymera.png" alt="Logo">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenu">
          <span></span>
          <span></span>
          <span></span>
          </span>
       </div>
       <div id="navbarMenu" class="navbar-menu">
            <div class="navbar-end">
                <a class="navbar-item is-active" href="home">
                  Inicio
                </a>
                <?php if($_SESSION['director_grupo'] == '1'): ?>
                    <a class="navbar-item" href="director_grupo">
                        Director Grupo
                    </a>
                <?php endif; ?>
                <a class="navbar-item" href="calendario">
                    Calendario
                </a>
                <a class="navbar-item" href="notas">
                    Notas
                </a>
                <a class="navbar-item" href="periodo">
                    Periodos
                </a>
                <!-- profile navbar card-->
                <!-- dropdown -->
                  <div class="navbar-item has-dropdown is-hoverable">
                      <a class="navbar-link">
                            Cuenta
                      </a>
                      <div class="navbar-dropdown">
                        <a class="navbar-item" href="#">
                            <?php echo $_SESSION['nombre']; ?>
                        </a>
                          <a class="navbar-item" href="perfil">
                              <p class="lead">Perfil</p>
                          </a>
                          <a class="navbar-item">
                              Configuraciones
                          </a>
                          <hr class="navbar-divider">
                          <a class="navbar-item" href="cerrarSesion">
                              Salir
                          </a>
                        </div>
                      </div>
                      <a class="m-t-5">
                        <span><?php if(!empty($userphoto['photo'])): ?>
                          <img class="thumbnail" width="50" height="50" src="<?php echo $userphoto['photo'] ?>" alt="<?php $_SESION['nombre'] ?>" />
                              <?php else: ?>
                          <img class="thumbnail" width="50" height="50" src="public/media/user-default.png" alt="<?php $_SESION['nombre'] ?>" />
                              <?php endif; ?>
                        </span>
                      </a>
                  </div>
              </div>
        </div>
    </nav>
<!-- END NAV -->
