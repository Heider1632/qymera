<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
	else:
	/*  schema that allow callback the functions */
	require 'core/model/coexistence.php';
	require 'core/model/teacher.php';

	$coexistence = new Coexistence();
	$teacher = new Teacher();

	/* areaplanes view */
			/* header */
			include 'views/overall/header.php';

				/* template notification */
				include 'views/overall/notifications.php';

			/* scripts*/
			include 'views/overall/scripts.php';

	endif;
?>
