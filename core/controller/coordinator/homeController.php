<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location: http://localhost:8888/qymera/redirec/');
	}else{
		/**
		 * [require description]
		 * @var [type]
		 */
		require 'core/model/directivo.php';
		$directivo = new Directivo();

		require 'core/model/imports.php';
		$imports = new Imports();

		/**
		 * [include description]
		 * @var [type]
		 */
		include 'views/overall/header.php';

		$result = $verify['estado'];

		if($result == 0){

			switch ($view[2]) {
				case 'creategrades':
					$grades = $imports->importGrades();
					include 'views/coordinator/started/createGrades.php';
					break;

				case 'importstudents':
					switch ($view[3]) {
						case 'grade':
							$id_grade = $view[4];

							break;

						default:
							include 'views/coordinator/started/importstudents';
							break;
					}
					break;
				default:
					include 'views/coordinator/started/viewYear.php';
					break;
			}

		}else{

			include 'views/coordinator/home.php';

		}

		/**
		 * [include description]
		 * @var [type]
		 */
		include 'views/overall/scripts.php';
	}
?>
