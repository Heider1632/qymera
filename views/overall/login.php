<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Qymera</title>
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="public/css/sweetalert.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="public/css/util.css">
		<link rel="stylesheet" type="text/css" href="public/css/main-login.css">
    <!-- bulma css-->
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.css'>
	<!--===============================================================================================-->
  <!-- favicons
  ================================================== -->
  <link rel="shortcut icon" href="public/icon/qymera.ico" type="image/x-icon">
  <link rel="icon" href="public/icon/qymera.ico" type="image/x-icon">
  </head>

  <body>
  <!-- nav -->
    <nav class="navbar">
      <div class="container">
          <div class="navbar-brand is-centered">
              <a class="navbar-item" href="<?php APP_URL ?>">
                  <img src="public/images/title-qymera.png" alt="Logo">
              </a>
           </div>
      </div>
    </nav>
  <!-- nav -->
  <div class="container">
    <div class="columns is-2">
      <div class="column is-hidden-mobile m-t-20">
        <img src="public/images/advisement.png" alt="publish"/>
      </div>
      <div class="column m-t-20">
        <!-- Formulario Login -->
      <div class="form">
        <form class="register-form">

          <input type="text" id="email-reg" placeholder="email address"/>
          <input type="password" id="pass-reg" placeholder="password"/>
          <input type="password" id="pass_reg_2" placeholder="repeat password"/>

          <button id="register">Registrarse</button>
          <p class="message">Ya estas registrado? <a href="#">Iniciar Sesión</a></p>
        </form>

        <form class="login-form">
          <input type="email" id="email" placeholder="username"/>
          <input type="password" id="password" placeholder="password"/>
          <button type="button" id="login">Iniciar Sesión</button>
          <hr />
          <input type="text" id="token" placeholder="token" />
          <button type="button" id="tempLogin">Token</button>
          <p class="message">No registrado? <a href="#">Crear una cuenta</a></p>
        </form>
      </div>
      <!-- Final del formulario login -->
    </div>
  </div>
</div>

	<!--jquery -->
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<!-- Js personalizado -->
  <script src="core/bin/ajax/login.js"></script>
  <script src="core/bin/ajax/register.js"></script>
  <script src="public/js/animate-login.js"></script>
  <!-- SweetAlert js -->
  <script src="public/js/sweetalert.min.js"></script>
  </body>

</html>
