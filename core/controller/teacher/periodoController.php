<?php
	if(!isset($_SESSION['id'])):
		header('location:' .APP_URL.  'default/redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/teacher.php';
    require 'core/model/coexistence.php';
		$teacher = new Teacher();
    $coexistence = new Coexistence();

		$inf_teacher = ($teacher->getInfTeacher());

    $periodos = ($coexistence->getPeriodos());

	/* home view */
		/* header */
		include 'views/overall/header.php';

		?>
		<div id="app">
		<?php

		/* template home */
		include 'views/overall/periodo.php';

		/* scripts*/
		include 'views/overall/scripts.php';

		?>
		</div>
		<?php

	endif;
?>
