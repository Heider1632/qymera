<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
	else:
	/*  schema that allow callback the functions */

	/* home view */
		/* header */
		include 'views/overall/header.php';

		/* template home */
		include 'views/overall/calendario.php';

		/* scripts*/
		include 'views/overall/scripts.php';

	endif;
?>
