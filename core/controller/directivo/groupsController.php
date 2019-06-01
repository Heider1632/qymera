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
                switch($view[2]){
                    case 'primary':
                        if(!empty($view[3])){
                            $id_group = $view[3];

                            $students = $directivo->find_students_for_group($id_group);
                            
                            include 'views/directivo/preview-group.php';
                        }else{
                            $primary_sedes = $directivo->getPrimarySedes();
                            
                            include 'views/directivo/primary-groups.php';
                        }
                        break;
                    case 'balechor':
                        if(!empty($view[3])){
                            $id_group = $view[3];

                            $students = $directivo->find_students_for_group($id_group);
                        
                            include 'views/directivo/preview-group.php';
                        }else{
                            $balechor_groups = $directivo->getBalechorGroups();
                            include 'views/directivo/balechor-groups.php';
                        }
                        break;
                    default:
                        include 'views/directivo/groups.php';
                        break;
                }
				break;
		}

		include 'views/overall/scripts.php';


	}
?>