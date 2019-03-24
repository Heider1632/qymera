<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location: ' . APP_URL . 'default/redirec/');
	}else{

	//$date = getDateWithCarbon();
		
		
		require 'core/model/directivo.php';
		$directivo = new Directivo();

		//require 'core/model/imports.php';
		//$imports = new Imports();

		/**
		 * [include description]
		 * @var [type]
		 */
		include 'views/overall/header.php';

		$verify = $directivo->verify();

		$result = $verify['estado'];

		if($result == 1){

			switch ($view[2]) {
				/**
				 * vista para crear la institucion
				 */
				case 'createinstitute':
					include 'views/directivo/started/createInstitute.php';
					break;
				/**
				 * ruta que evalua la bifurcacion la bifurcacion
				 */
				case 'config':
					switch ($view[3]) {
						case 'primary':
							switch ($view[4]) {
								case 'createsedes':
									$sedes = $directivo->getPrimarySedes();
									include 'views/directivo/started/primary/createSedes.php';
									break;
								case 'creategrades':
									$primary_grades = $directivo->getPrimaryGrades();
									//$grades = $imports->importGrades();
									include 'views/directivo/started/primary/createGrades.php';
									break;
								case 'creategroups':
									$sedes = $directivo->getPrimarySedes();
									$primary_grades = $directivo->getPrimaryGrades();
									$primary_groups = $directivo->getPrimaryGroups();//
									$groups = $directivo->getAsyncGroups();							
									include 'views/directivo/started/primary/createGroups.php';
									break;
								case 'creatematters':
									$matters = $directivo->getMatters();
									include 'views/directivo/started/primary/createMatters.php';
									break;
								/*case 'choisestudents':
									$primary_groups = $directivo->getPrimaryGroups();
									include 'views/directivo/started/choiseStudents.php';
									break;*/
								case 'createteacher':
									$groups = $directivo->getPrimaryGroups();
									$teachers = $directivo->getPrimaryTeachers();
									include 'views/directivo/started/primary/createTeacher.php';
									break;
								case 'createcharges':
									$teacher = $directivo->getPrimaryTeachers();
									$grades = $directivo->getPrimaryGrades();
									$groups = $directivo->getAsyncGroups();
									$sedes = $directivo->getPrimarySedes();
									$matters = $directivo->getMatters();
									$information = $directivo->getInformationTeacher();
									include 'views/directivo/started/primary/createCharges.php';
									break;
								default:
									# code...
									break;
							}
							break;
						case 'balechor':
							switch ($view[4]) {
								case 'createsedes':
									$sedes = $directivo->getBalechorSedes();
									include 'views/directivo/started/balechor/createSedes.php';
									break;
								case 'creategrades':
									$balechor_grades = $directivo->getBalechorGrades();
									//$grades = $imports->importGrades();
									include 'views/directivo/started/balechor/createGrades.php';
									break;
								case 'creategroups':
									$sedes = $directivo->getBalechorSedes();
									$balechor_groups = $directivo->getBalechorGroups();
									$balechor_grades = $directivo->getBalechorGrades();
									$groups = $directivo->getAsyncGroups();
									include 'views/directivo/started/balechor/createGroups.php';
									break;
								case 'creatematters':
									$matters = $directivo->getMatters();
									include 'views/directivo/started/balechor/createMatters.php';
									break;
								/*case 'choisestudents':
									$primary_groups = $directivo->getPrimaryGroups();
									include 'views/directivo/started/choiseStudents.php';
									break;*/
								case 'createteacher':
									$groups = $directivo->getBalechorGroups();
									$teachers = $directivo->getBalechorTeachers();
									include 'views/directivo/started/balechor/createTeacher.php';
									break;
								case 'createcharges':
									$teacher = $directivo->getBalechorTeachers();
									$grades = $directivo->getBalechorGrades();
									$groups = $directivo->getAsyncGroups();
									$sedes = $directivo->getBalechorSedes();
									$matters = $directivo->getMatters();
									$information = $directivo->getInformationTeacher();
									include 'views/directivo/started/balechor/createCharges.php';
									break;
								default:
									# code...
									break;
							}
							break;
						default:
							include 'views/directivo/started/divider.php';
							break;
					}
					break;
				/**
				 * finaliza las configuraciones
				 */
				case 'finish':
					include 'views/directivo/started/finishconfig.php';
					break;
				/**
				 * default comienza el año
				 */
				default:
					include 'views/directivo/started/viewYear.php';			
					break;
			}

		}else{

			$num_teachers = $directivo->getCountTeachers()[0];

			$num_director_groups = $directivo->getCountDirectorGroups()[0];

			include 'views/directivo/home.php';

		}

		/**
		 * [include description]
		 * @var [type]
		 */
		include 'views/overall/scripts.php';
	}
?>
