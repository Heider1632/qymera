<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location: ' . APP_URL . 'default/redirec/');
	}else{

		require 'core/model/directivo.php';
		$directivo = new Directivo();
		/**
		* Teacher()
		* @return [Teachers] 
		*/
		$Teachers = $directivo->getTeachers();

		/**
		* Matters()
		* @return [Matters] 
		*/
		$matters = $directivo->getMatters();

		include 'views/overall/header.php';

		switch ($view[2]) {
			case 'add':
				$primaryGroups = $directivo->getPrimaryGroups();
				$primarySedes = $directivo->getPrimarySedes();
				$balechorGroups = $directivo->getBalechorGroups();
				include 'views/directivo/add-charges-academic.php';
				break;
			default:
				$primaryCharges = $directivo->getPrimaryCharges();
				$balechorCharges = $directivo->getBalechorCharges();
				include 'views/directivo/view-charges-academic.php';
				break;
		}

		include 'views/overall/scripts.php';


	}
?>