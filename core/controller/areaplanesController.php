<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
	else:
	/*  schema that allow callback the functions */

	/* home view */
		/* header */
		include 'views/overall/header.php';

		?>
		<div id="app">
		<?php

		/* template home */
		include 'views/user/areaplanes.php';

		/* scripts*/
		include 'views/overall/scripts.php';

		?>
		</div>
		<?php

	endif;
?>
