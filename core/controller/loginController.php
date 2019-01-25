<?php

if(isset($_SESSION['id'])){
	header('location: http://localhost:8888/qymera/default/redirec/');
} else {

	switch ($view[1]) {
		case 'go':
		# Leemos las variables enviadas mediante Ajax
		$email = $_POST['email'];
		$clave = $_POST['password'];

		# Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
		if(empty($email) || empty($clave)) {
				# mostramos la respuesta de php (echo)
				echo 'error_1';
		}else{
			// Remove all illegal characters from email
			$email = filter_var($email, FILTER_SANITIZE_EMAIL);

			filter_var($email, FILTER_VALIDATE_EMAIL);

			# Incluimos la clase usuario
			require_once 'core/model/usuario.php';

			# Creamos un objeto de la clase usuario
			$usuario = new Usuario();

			# Encryptamos la $clave
			$clave = md5($clave);

			# Llamamos al metodo login para validar los datos en la base de datos
			$usuario->login($email, $clave);

			}
			break;

		default:
			/* template login */
			include 'views/overall/login.php';
			break;
	}

}
