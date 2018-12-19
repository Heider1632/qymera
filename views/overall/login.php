<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Qymera</title>
    <!-- Sweet Alert: alertas JavaScript presentables para el usuario (más bonitas que el alert) -->
    <link rel="stylesheet" href="vistas/css/sweetalert.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="public/css/util.css">
		<link rel="stylesheet" type="text/css" href="public/css/main-login.css">
	<!--===============================================================================================-->
  <!-- favicons
  ================================================== -->
  <link rel="shortcut icon" href="public/icon/qymera.ico" type="image/x-icon">
  <link rel="icon" href="public/icon/qymera.ico" type="image/x-icon">
  </head>

  <body>
  <!-- Formulario Login -->
  <div class="m-t-70">

    <div class="form">
      <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
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
  </div>
  <!-- Final del formulario login -->

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
