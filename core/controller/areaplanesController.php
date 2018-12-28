<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
	else:
	/*  schema that allow callback the functions */
	require 'core/model/coexistence.php';
	require 'core/model/teacher.php';

	$coexistence = new Coexistence();
	$teacher = new Teacher();

	$action = isset($_GET['action']) ? $_GET['action'] : 'view';

	switch ($action) {
		case 'upload':
			if(!empty($_FILES)){
				$file = $_FILES['file']['tmp_name'];
				$fileName = $_FILES['file']['name'];
				$fileType = $_FILES['file']['type'];
				$fileError = $_FILES['file']['error'];
				$grade = $_POST['grade'];
				$id_grade = $_POST['id_grade'];
				$id_matter = $_POST['id_matter'];

				$coexistence->uploadAreaPlane($fileName, $fileType, $file, $grade, $id_grade, $id_matter);
			}else{
				echo 1;
			}
			break;

		default:
		/* areaplanes view */
			/* header */
			include 'views/overall/header.php';

				/* template areaplanes */
				include 'views/user/areaplanes.php';

			/* scripts*/
			include 'views/overall/scripts.php';
			break;
	}

	endif;
?>
