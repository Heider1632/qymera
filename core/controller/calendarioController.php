<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
	else:
	/*  schema that allow callback the functions */
	switch ($view[1]) {
		case 'add':
			if($_POST){
				//define_syslog_variables
				$title = $_POST['title'];
				$body = $_POST['body'];
				$start_date = $_POST['start_date'];
				$end_date = $_POST['end_date'];
				//event lauch
				addEvent($title, $body, $start_date, $end_date);
				//response server
				echo 1;
			}else{
				echo 'error';
			}
			break;
		case 'edit':
			//VARIABLES
			$id_event = $_POST['id_event'];
			$title = $_POST['title'];
			$body = $_POST['body'];
			$start_date = $_POST['start_date'];
			$end_date = $_POST['end_date'];
			$nuevoEvento = $_POST['nuevoEvento'];
			//event lauch
			modEvent($nuevoEvento);
			//response server
			echo 1;
			break;
		case 'del':
			if($_POST){
				$id = $_POST['id_event'];
				delEvent($id);
				echo 1;
			}else{
				echo 'error';
			}
			break;
		case 'events':
			header('Content-Type: application/json');
			$events = getEvents();
			echo json_encode($events);
			break;
		default:
		/* home view */
			/* header */
			include 'views/overall/header.php';

			/* template home */
			include 'views/overall/calendario.php';

			/* scripts*/
			include 'views/overall/scripts.php';
			break;
	}
	endif;
?>
