<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location: ' . APP_URL . 'default/redirec/');
	}else{


		require 'core/model/directivo.php';
		$directivo = new Directivo();

		switch ($view[2]) {
			case 'add':
				include 'views/directivo/add-teacher.php';
				break;
			case 'edit':
				include 'views/directivo/edit-teacher.php';
				break;
			case 'delete':
				include 'views/directivo/delete-teacher.php';
				break;
			default:
				include 'views/overall/header.php';
				include 'views/directivo/teacher.php';
				include 'views/overall/scripts.php';
				break;
		}


	}
?>