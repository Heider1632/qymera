<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Qymera</title>
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="<?php echo APP_URL ?>public/css/sweetalert.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>public/css/util.css">
		<link rel="stylesheet" type="text/css" href="<?php echo APP_URL ?>public/css/main-login.css">
    <!-- bulma css-->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css'>
	<!--===============================================================================================-->
  <!-- favicons
  ================================================== -->
  <link rel="shortcut icon" href="<?php echo APP_URL ?>public/icon/qymera.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo APP_URL ?>public/icon/qymera.ico" type="image/x-icon">
  </head>

  <body>
  <!-- nav -->
    <nav class="navbar">
      <div class="container">
          <div class="navbar-brand is-centered">
              <a class="navbar-item" href="<?php echo APP_URL; ?>">
                  <img src="<?php echo APP_URL ?>public/images/title-qymera.png" alt="Logo">
              </a>
           </div>
      </div>
    </nav>
  <!-- nav -->
  <div class="container">
    <div class="columns is-2">
      <div class="column is-hidden-mobile m-t-20">
        <img src="<?php echo APP_URL ?>public/images/advisement.png" alt="publish"/>
      </div>
      <div class="column m-t-20">
        <!-- Formulario Login -->
      <div class="form">
        <form class="register-form">
          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field">
                  <label class="label">Primer Nombre</label>
                  <input class="input is-success" type="text" id="first-name" placeholder="primer nombre" required>
                </p>
              </div>
              <div class="field">
                  <label class="label">Segundo Nombre</label>
                  <input class="input is-success" type="text" id="second-name" placeholder="segundo nombre">
                </p>
              </div>
            </div>
          </div>
          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field">
                  <label class="label">Primer Apellido</label>
                  <input class="input is-normal" type="text" id="first-lastname" placeholder="primer apellido" required>
                </p>
              </div>
              <div class="field">
                  <label class="label">Segundo Apellido</label>
                  <input class="input is-success" type="text" id="second-lastname" placeholder="segundo apellido" required>
                </p>
              </div>
            </div>
          </div>
          <input type="text" class="input is-medium" id="email_reg" placeholder="email address"/>
          <br />&nbsp;
          <input type="password" class="input is-medium" id="pass_reg" placeholder="password"/>
          <br />&nbsp;
          <input type="password" class="input is-medium" id="pass_reg_2" placeholder="repeat password"/>
          <br />&nbsp;
          <button id="register">Registrarse</button>
          <p class="message">Ya estas registrado? <a href="#">Iniciar Sesión</a></p>
        </form>

        <form class="login-form">
          <input type="email" class="input is-medium" id="email" placeholder="username"/>
          <br />&nbsp;
          <input type="password" class="input is-medium" id="password" placeholder="password"/>
          <br />&nbsp;
          <!-- Animacion de load (solo sera visible cuando el cliente espere una respuesta del servidor )-->
          <div class="columns" id="login-load" hidden="hidden">
            <div class="column">
              <img src="<?php echo APP_URL ?>public/images/load.gif" width="100%" alt="">
              <span>Validando información...</span>
            </div>
          </div>
          <button type="button" id="login">Iniciar Sesión</button>
          <hr />
          <input type="text" class="input is-medium" id="token" placeholder="token" />
          <br />&nbsp;
          <div class="columns" id="token-load" hidden="hidden">
            <div class="column">
              <img src="<?php echo APP_URL ?>public/images/load.gif" width="100%" alt="">
              <span>Validando información...</span>
            </div>
          </div>
          <button type="button" id="tempLogin">Token</button>
          <p class="message">No registrado? <a href="#">Crear una cuenta</a></p>
        </form>
      </div>
      <!-- Final del formulario login -->
    </div>
  </div>
</div>

	<!--jquery -->
	<script type="text/javascript" src="<?php echo APP_URL ?>public/js/jquery.js"></script>
	<!-- Js personalizado -->
  <script src="<?php echo APP_URL ?>core/bin/ajax/login.js"></script>
  <script src="<?php echo APP_URL ?>core/bin/ajax/register.js"></script>
  <script src="<?php echo APP_URL ?>public/js/animate-login.js"></script>
  <!-- SweetAlert js -->
  <!-- sweetalert -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.33.1/dist/sweetalert2.all.min.js"></script>
  </body>

</html>
