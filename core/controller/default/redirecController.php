<?php
	session_start();

		//cases to validate
		switch ($_SESSION['cargo']) {
			case '1':
				header('location: '. APP_URL . 'directivo/home/');
				break;
			case '2':
				header('location: ' . APP_URL .'teacher/home/');
				break;
			default:
				header('location: ' . APP_URL );
				break;
		}
?>
