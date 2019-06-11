<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 1):
		header('location:' .APP_URL.  'default/redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/group-director.php';
		$director_grupo = new GroupDirector();

		$grades = ($director_grupo->getGradeC());

	/* home view */
		/* header */
		include 'views/overall/header.php';


		/* template home */
		include 'views/teacher/director.php';

		/* scripts*/
		include 'views/overall/scripts.php';


	endif;
?>
