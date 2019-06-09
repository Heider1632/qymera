<?php
	if(!isset($_SESSION['id'])):
		header('location:' .APP_URL.  'default/redirec/');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/coexistence.php';
		require 'core/model/teacher.php';

		$coexistence = new Coexistence();
		$teacher = new Teacher();

		switch ($view[2]) {
            case 'normalreport': 
            include APP_URL . 'core/reports/simplyreport.php';
                break;
            case 'simplereport':
                include APP_URL . 'core/reports/simplereport.php';
                break;
			default:
                /* preview report view */
				/* header */
				include 'views/overall/header.php';

				/* template preview notes */
				include 'views/user/reports.php';

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
		}

	endif;
?>
