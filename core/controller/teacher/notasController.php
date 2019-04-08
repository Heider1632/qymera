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

					echo 3;
					
				}else{
					echo 1;
				}
				break;
			case 'edit':

				break;
			case 'preview':
				/* header */
				include 'views/overall/header.php';


				if($view[3] == 'addnote' && $view[4] == 'indicator' && $view[6] == 'group'){

					$id_indicator = $view[5];

					$id_group = $view[7];

					//$students = ($teacher->getStudentsOfGroup($id_group));

					$activitys = ($teacher->getActivitysForNotes($id_indicator));

					/* template add notes */
					include 'views/user/addNotes.php';
					

				}else if($view[3] == 'grade' && $view[5] == 'matter' && $view[7] == 'group'){

					/* template select indicators */
					include 'views/user/selectIndicators.php';
	
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
