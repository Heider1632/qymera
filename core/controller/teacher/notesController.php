<?php
	if(!isset($_SESSION['id'])):
		header('location:' .APP_URL.  'default/redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/coexistence.php';
		require 'core/model/teacher.php';

		$coexistence = new Coexistence();
		$teacher = new Teacher();

		$matters = ($teacher->getMatters());

		switch ($view[2]) {
			case 'addlist':
				if($_POST){

					$id_activity = $_POST['id_activity'];
					$id_students = $_POST['id_students'];
					$id_matter = $_POST['id_matter'];
					$id_group = $_POST['id_group'];
					$notes = $_POST['notes'];

					if(!empty($id_activity) || !empty($id_students) || !empty($id_group) || !empty($id_matter) ){

						for($i = 0; $i < sizeof($notes); $i++){
							if($notes[$i] == "" && $id_students[$i] == ""){
								echo 2;
								exit();
							}
						}

						$teacher->putListNotes($id_activity, $id_matter, $id_group, $id_students, $notes);

					}else{
						echo 2;
					}
					
				}else{
					echo 1;
				}
				break;
			case 'addunic':
				if($_POST){

					$id_activity = $_POST['id_activity'];
					$id_student = $_POST['id_student'];
					$id_matter = $_POST['id_matter'];
					$id_group = $_POST['id_group'];
					$note = $_POST['note'];

					if(!empty($id_activity) || !empty($id_student) || !empty($id_group) || !empty($id_matter) ){

						$teacher->putUnicNote($id_activity, $id_matter, $id_group, $id_student, $note);

					}else{
						echo 2;
					}
					
				}else{
					echo 1;
				}

				break;
			case 'viewNotes':
			/* notes view */
				/* header */
				include 'views/overall/header.php';

				/* template home */
				include 'views/teacher/notes.php';

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
			case 'type':

				/* header */
				include 'views/overall/header.php';
				if($view[3] == 'list'){

					switch ($view[4]) {
						case 'preview':

							if($view[5] == 'addnote' && $view[6] == 'matter' && $view[8] == 'activity' && $view[10] == 'group'){

								$id_matter = $view[7];

								$id_activity = $view[9];

								$id_group = $view[11];

								$students = $teacher->getStudentsOfGroup($id_group);

								$activitys = $teacher->getActivityForNotes($id_activity);

								/* template add notes */
								include 'views/teacher/_formAddListNotes.php';
					

							}else if($view[5] == 'selectindicator' && $view[6] == 'grade' && $view[8] == 'matter' && $view[10] == 'group'){

								/* template select indicators */
								include 'views/overall/teacher/_selectindicatorfrommatter.php';

							}

							break;
						default:
							include 'views/teacher/_previewList.php';
							break;
					}

				}else if($view[3] == 'unic'){

					switch ($view[4]) {
						case 'preview':
		
							if($view[5] == 'addnote' && $view[6] == 'matter' && $view[8] == 'activity' && $view[10] == 'group' && $view[12] == 'student'){

								$id_matter = $view[7];

								$id_activity = $view[9];

								$id_group = $view[11];

								$students = $teacher->getStudentsOfGroup($id_group);

								$activitys = $teacher->getActivityForNotes($id_activity);

								/* template add notes */
								include 'views/teacher/_formAddUnicNotes.php';
					

							}else if($view[5] == 'selectindicator' && $view[6] == 'grade' && $view[8] == 'matter' && $view[10] == 'group'){

								/* template select indicators */
								include 'views/overall/teacher/_selectindicatorfrommatter.php';

							}


							break;
						default:
							include 'views/teacher/_previewUnic.php';
							break;
					}

					
				}
				/* scripts*/
				include 'views/overall/scripts.php';

				break;
			default:
			/* preview note view */
				/* header */
				include 'views/overall/header.php';

				/* template preview notes */
				include 'views/overall/teacher/_preSelectTypeNotes.php';

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
		}

	endif;
?>
