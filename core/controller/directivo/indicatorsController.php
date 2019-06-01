<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location: ' . APP_URL . 'default/redirec/');
	}else{

		require 'core/model/directivo.php';
		$directivo = new Directivo();

		require 'core/model/coexistence.php';
		$coexistence = new Coexistence();

		//$allIndicators = $coexistence->getRepositoryIndicators();

		include 'views/overall/header.php';

		switch ($view[2]) {
			case 'add':

                /**
				* Matters()
				* @return [Matters] 
				*/
				$matters = $directivo->getMatters();
				/**
				* Periods()
				* @return [Periods] 
				*/
				$periods = $coexistence->getPeriodos();
				include 'views/directivo/add-indicator.php';
				break;
			default:
				$allIndicators = $directivo->getIndicatorsToRepository();
				include 'views/directivo/indicators.php';
				break;
		}

		include 'views/overall/scripts.php';


	}
?>