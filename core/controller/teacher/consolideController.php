<?php
	if(!isset($_SESSION['id'])):
		header('location:' .APP_URL.  'default/redirec/');
	else:
	/*  schema that allow callback the functions */

	/* home view */
		/* header */
		include 'views/overall/header.php';

		?>
		<div id="app">
		<?php

		/* template home */
		include 'views/user/consolide.php';

		/* scripts*/
		include 'views/overall/scripts.php';

		?>
		</div>
		<?php

	endif;
?>
