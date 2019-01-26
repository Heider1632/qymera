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

		$verify = $directivo->verify();

		$result = $verify['estado'];

		if($result == 0){

			switch ($view[2]) {
				case 'creategrades':
					switch ($view[3]){
						case 'add':
							if($_POST){

								$name = $_POST['name'];
								$directivo->addGrade($name);

							}else {
								echo 1;
							}
							break;
						default:
							$grades = $imports->importGrades();
							var_dump($grades);
							include 'views/coordinator/started/createGrades.php';
						break;
					}
					break;
				case 'creategroups':
					include 'views/coordinator/started/createGroups.php';
					break;
				case 'choisestudents':
					//$groups = $directivo->getGroups();
					include 'views/coordinator/started/choiseGroups.php';
					break;
				case 'importstudents':
						$id_grade = $view[4];
						$id_group = $view[6];
						include 'views/coordinator/started/importstudents';
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
