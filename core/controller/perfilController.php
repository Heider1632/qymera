<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
	else:
	/*  schema that allow callback the functions */
		require 'core/model/teacher.php';
		require 'core/model/usuario.php';
		$teacher = new Teacher();
		$user = new Usuario();

		$action = isset($_GET['action']) ? $_GET['action'] : 'view';

		switch ($action) {
			case 'upload':
				if(!empty($_FILES)){

					$file = $_FILES['image-profile']['tmp_name'];
					$fileName = $_FILES['image-profile']['name'];
					$fileType = $_FILES['image-profile']['type'];

					$user->uploadImageProfile($fileName, $fileType, $file);

				}else{
					echo 1;
				}
				break;
			case 'updateTeacher':
				if($_POST){
					$name = $_POST['name'];
					$lastname = $_POST['lastname'];
					$teacher->updateTeacher($name, $lastname);
				}else {
					echo 1;
				}
				break;
			case 'updateUser':
				if($_POST){
					$email = $_POST['email'];
					$password = $_POST['password'];
					$password_2 = $_POST['$password_2'];

					if($password === $password_2){
						$teacher->updateUser($email, $password);
					}else{
						echo 2;
					}
				}else {
					echo 1;
				}
				break;
			default:
			/* profile view */
				/* header */
				include 'views/overall/header.php';

				/* template profile */
				include 'views/user/profile.php';

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
		}
	endif;
?>
