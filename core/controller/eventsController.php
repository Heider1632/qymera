<?php
	if(!isset($_SESSION['id'])){
		header('location: index.php');
	}else{
		//true post if isset
		if($_POST){
			//cases
			if($_POST['action'] == 'add'){
				//define_syslog_variables
				$title = $_POST['title'];
				$body = $_POST['body'];
				$start_date = $_POST['start_date'];
				$end_date = $_POST['end_date'];
				//event lauch
				addEvent($title, $body, $start_date, $end_date);
				//response server
				echo 1;
			}else if($_POST['action'] == 'mod'){
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
			}else if($_POST['action'] == 'del'){
				$id_event = $_POST['id_event'];
				$delEvent = delEvent($id_event);
				echo 1;
			}else{
				echo $_GET['view'] = '?view=calendario';
			}
		}else{
			header('Content-Type: application/json');
			$events = getEvents();
			echo json_encode($events);
		}

	}
?>
