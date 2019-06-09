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
			case 'add':
				if($_POST){

					$id_indicator = $_POST['id_indicator'];
					$id_activity = $_POST['id_activity'];
					$id_student = $_POST['id_student'];
					$id_mater = $_POST['id_matter'];
					$id_group = $_POST['id_group'];
					$notes = $_POST['note'];

					if(!empty($id_indicator) || !empty($id_activity) || !empty($id_student) || !empty($id_group) || !empty($id_matter) ){

						/*for($i = 0; $i < sizeof($notes); $i++){
							if($notes[$i] == ""){
								echo 2;
								exit();
							}
						}*/

						$teacher->putNotesList($id_activity, $id_indicator, $id_student, $id_group, $id_matter, $notes);

					}else{
						echo 2;
					}
					
				}else{
					echo 1;
				}
				break;
			case 'edit':

				break;
			case 'preview':
				/* header */
				include 'views/overall/header.php';


				if($view[3] == 'addnote' && $view[4] == 'matter' && $view[6] == 'activity' && $view[8] == 'group'){

					$id_matter = $view[5];

					$id_activity = $view[7];

					$id_group = $view[9];

					$students = ($teacher->getStudentsOfGroup($id_group));

					$activitys = ($teacher->getActivityForNotes($id_activity));

					/* template add notes */
					include 'views/user/addNotes.php';
					

				}else if($view[3] == 'selectactivity' && $view[5] == 'grade' && $view[7] == 'matter' && $view[9] == 'group'){

					/* template select activitys */
					include 'views/user/selectActivitys.php';
	
				}else if($view[3] == 'selectindicator' && $view[4] == 'grade' && $view[6] == 'matter' && $view[8] == 'group'){

					/* template select indicators */
					include 'views/overall/teacher/_selectindicatorfrommatter.php';

				}

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
			case 'viewNotes':
			/* notes view */
				/* header */
				include 'views/overall/header.php';

				/* template home */
				include 'views/user/notes.php';

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
			default:
			/* preview note view */
				/* header */
				include 'views/overall/header.php';

				/* template preview notes */
				include 'views/user/preview.php';

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
		}

	endif;
?>
