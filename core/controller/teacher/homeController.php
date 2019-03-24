<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 1):
		header('location:' . APP_URL . 'redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/teacher.php';
		$teacher = new Teacher();

		$validation = ($teacher->getValidation());

		$inf_teacher = ($teacher->getInfTeacher());

		$materias = ($teacher->getMateria());

			if($validation[0] == 0){

				switch ($view[2]) {
					case 'post':
						if($_POST){

							$new_password = $_POST['new_password'];

							if(empty($new_password)){
								echo 2;
							}else{
								
								$teacher->changePassword($new_password);
							}
							
						}else{
							echo 1;
						}
						break;
					
					default:
						/* header */
						include 'views/overall/header.php';
						/* template restart */
						include 'views/user/restart.php';
						/* scripts*/
						include 'views/overall/scripts.php';
						break;
				}

			}else{

				/* home view */
				/* header */
				include 'views/overall/header.php';

				/* template home */
				include 'views/user/home.php';

				/* scripts*/
				include 'views/overall/scripts.php';

			}
	endif;
?>
