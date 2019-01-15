<?php
	session_start();

		//cases to validate
		switch ($_SESSION['cargo']) {
			case '1':
				header('location: http://localhost:8888/qymera/coordinator/home/');
				break;
			case '2':
				header('location: http://localhost:8888/qymera/teacher/home/');
				break;
			default:
				header('location: http://localhost:8888/qymera/');
				break;
		}
?>
