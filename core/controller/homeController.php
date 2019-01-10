<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 1):
		header('location: http://localhost:8888/qymera/redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/teacher.php';
		$teacher = new Teacher();

		$inf_teacher = ($teacher->getInfTeacher());

		$materias = ($teacher->getMateria());

	/* home view */
		/* header */
		include 'views/overall/header.php';

		?>
		<div id="home">
		<?php

		/* template home */
		include 'views/user/home.php';

		?>
		</div>
		<?php
		/* scripts*/
		include 'views/overall/scripts.php';

	endif;
?>
