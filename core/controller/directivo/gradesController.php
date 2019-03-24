<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location: ' . APP_URL . 'default/redirec/');
	}else{

		require 'core/model/directivo.php';
		$directivo = new Directivo();

		include 'views/overall/header.php';

		switch ($view[2]) {
			case 'add':
				include 'views/directivo/add-grade.php';
				break;
			case 'edit':
				include 'views/directivo/edit-grade.php';
				break;
			default:
				include 'views/directivo/grade.php';
				break;
		}

		include 'views/overall/scripts.php';


	}
?>