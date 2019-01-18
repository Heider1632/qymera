<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
	else:
	/*  schema that allow callback the functions */
	require 'core/model/coexistence.php';
	require 'core/model/teacher.php';

	$coexistence = new Coexistence();
	$teacher = new Teacher();

	switch ($view[2]) {
		case 'upload':
			if($_POST){
			  $file = $_FILES['file']['tmp_name'];
			  $fileName = $_FILES['file']['name'];
			  $fileType = $_FILES['file']['type'];
			  $fileError = $_FILES['file']['error'];
			  $id_grade = $_POST['id_grade'];
			  $id_matter = $_POST['id_matter'];

			  $coexistence->uploadAreaPlane($fileName, $fileType, $file, $id_grade, $id_matter);
			}else{
				echo 1;
			}
			break;
		case 'read':
			$id = $view[3];
			$file = find_areaplane($id);
			if($file[0]['ext'] == 'pdf'){
				header('content-type: application/pdf');
				readfile('http://localhost:8888/qymera/' . $file[0]['name']);
			}else{
				header('Content-disposition: inline');
				header('Content-type: application/msword');
				// not sure if this is the correct MIME type
				readfile('http://localhost:8888/qymera/' . $file[0]['name']);
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
