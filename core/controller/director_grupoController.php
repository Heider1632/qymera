<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 1):
		header('location: http://localhost:8888/qymera/redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/group-director.php';
		$director_grupo = new GroupDirector();

		$grades = ($director_grupo->getGradeC());

	/* home view */
		/* header */
		include 'views/overall/header.php';

		?>
		<div id="app">
		<?php

		/* template home */
		include 'views/user/director.php';

		/* scripts*/
		include 'views/overall/scripts.php';

		?>
		</div>
		<?php

	endif;
?>
