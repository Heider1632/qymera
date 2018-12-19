<?php

if(isset($_SESSION['id'])){
	header('location: redirec');
}

	$action = isset($_GET['action']) ? $_GET['action'] : 'view';

	switch ($action) {
		case 'go':
		# Leemos las variables enviadas mediante Ajax
		$email = $_POST['email'];
		$clave = $_POST['password'];

		# Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
		if((empty($email) || empty($clave))) {
				# mostramos la respuesta de php (echo)
				echo 'error_1';
		}else{
			# Incluimos la clase usuario
			require_once('core/model/usuario.php');

			# Creamos un objeto de la clase usuario
			$usuario = new Usuario();

			if(filter_var($email, FILTER_VALIDATE_EMAIL)) {

			# Llamamos al metodo login para validar los datos en la base de datos
			$usuario->login($email, $clave);

			}else{
				echo 'error_2';
				}
			}
			break;

		default:
			/* template login */
			include 'views/overall/login.php';
			break;
	}
