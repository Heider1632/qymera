<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/teacher.php';
		$teacher = new Teacher();

	/* home view */
		/* header */
		include 'views/overall/header.php';

		?>
		<div id="app">
		<?php
		/* template home */
		include 'views/user/profile.php';

		/* scripts*/
		include 'views/overall/scripts.php';
		?>
		</div>
		<?php
	endif;
?>
