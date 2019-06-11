<?php
	if(!isset($_SESSION['id'])):
		header('location:' .APP_URL.  'default/redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/teacher.php';
    	require 'core/model/coexistence.php';

		$teacher = new Teacher();
    	$coexistence = new Coexistence();

		$materias = $teacher->getMatters();

		include 'views/overall/header.php';

		/* navbar interface */
		include 'views/overall/teacher/nav-user.php';
		include 'views/overall/teacher/nav-tool.php';

		if($view[3] == 'grado' && $view[5] == 'grupo' && $view[7] == 'n') {

				include 'views/teacher/unicStudent.php';
		}else{		

				include 'views/overall/teacher/_individual.php';
		}

		/* scripts*/
		include 'views/overall/scripts.php';

	endif;
?>
