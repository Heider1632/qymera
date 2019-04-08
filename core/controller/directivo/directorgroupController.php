<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location: ' . APP_URL . 'default/redirec/');
	}else{

		require 'core/model/directivo.php';
		$directivo = new Directivo();

		$director_groups = $directivo->getDirectorGroups();

		include 'views/overall/header.php';

		switch ($view[2]) {
			case 'add':
				include 'views/directivo/add-director-group.php';
				break;
			case 'edit':
				if($view[3] != ''){
					//take the id for the route
					$id = $view[3];

					//$edit_director_group = $directivo->getDirectorGroupById($id);

					include 'views/directivo/edit-id-director-group.php';
				}else{
					include 'views/directivo/edit-director-group.php';
				}
				break;
			case 'delete':
				include 'views/directivo/delete-director-group.php';
				break;
			default:
				include 'views/directivo/director-group.php';
				break;
		}

		include 'views/overall/scripts.php';


	}
?>