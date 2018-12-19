<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
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
