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
                              Perfil
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
                  </div>
              </div>
        </div>
    </nav>
<!-- END NAV -->
