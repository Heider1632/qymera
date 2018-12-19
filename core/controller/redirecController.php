<?php
	session_start();

		//cases to validate
		switch ($_SESSION['cargo']) {
			case '1':
				header('location: admin');
				break;
			case '2':
				header('location: home');
				break;
			default:
				header('location: index.php');
				break;
		}
?>
