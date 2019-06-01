<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location: ' . APP_URL . 'default/redirec/');
	}else{

		require 'core/model/directivo.php';
		$directivo = new Directivo();

        include 'views/overall/header.php';

		switch ($view[1]) {
			case 'add':
				include 'views/directivo/add-student.php';
				break;
            default:    
                $primary_groups = $directivo->getPrimaryGroups();
                $balechor_groups = $directivo->getBalechorGroups();
                switch($view[2]){
                    case 'primary':
                        include 'views/directivo/add-primary-student.php';
                        break;
                    case 'balechor':
                        include 'views/directivo/add-balechor-student.php';
                        break;
                    default:
                        include 'views/directivo/student.php';
                        break;
                }
				break;
		}

		include 'views/overall/scripts.php';


	}
?>