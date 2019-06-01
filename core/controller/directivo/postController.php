<?php
    if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 2){
		header('location:' .APP_URL. 'default/redirec/');
	}else{

        /**
		 * [require description]
		 * @var [type]
		 */
		require 'core/model/directivo.php';
        $directivo = new Directivo();

         switch($view[2]){
             case 'createsede':
                if($_POST){
                    $name = $_POST['name'];
                    $population = $_POST['population'];
                    $location = $_POST['location'];
                    $agent = $_POST['agent'];
                    $contact = $_POST['contact'];

                    if(empty($name) || empty($location)){

                        echo 2;

                    }else{
                        $directivo->addSede($name, $population, $location, $agent, $contact);
                    }
                    
                }else{
                    echo 1;
                }
                break;
             case 'creategrades':
                if($_POST){

                 $name = $_POST['name'];
                  if(empty($name)){
                    echo 2;
                  }else {
                    $directivo->addGrade($name);
                  }

                }else {
                     echo 1;
                }
             break;
             case 'creategroups':
                if($_POST){
                    $id_sede = $_POST['sede'];
                    $id_grade = $_POST['id_grade'];
                    $id_group = $_POST['id_group'];
                    $code = md5($_POST['code']);
                    /** 
                     * [require description]
                     * @ffunction [type]
                    */
                    $directivo->addGroup($id_grade, $id_group, $code, $id_sede);
                }else{
                    echo 1;
                }
             break;
             case 'createteacher':
                if($_POST){
                    $first_name = $_POST['first_name'];
                    $second_name = $_POST['second_name'];
                    $first_lastname = $_POST['first_lastname'];
                    $second_lastname = $_POST['second_lastname'];
                    $email = $_POST['email'];
                    $password = $_POST['contraseña'];
                    $type = $_POST['type'];

                    if(empty($first_name) || empty($first_lastname) || empty($email)){
                        echo 2;
                    } else {
                        $directivo->addTeacher($first_name, $second_name, $first_lastname, $second_lastname, $email, $password, $type);
                    }
                }else {
                    echo 1;
                }
             break;
             case 'creatematter':
                if($_POST){
                    $name = $_POST['NameMatter'];

                    if(empty($name)){
                        echo 2;
                    }else{
                        $directivo->addMatter($name);
                    }
                }else{
                    echo 1;
                }
                break;
            case 'createassign':
                if($_POST){
                    $id_teacher = $_POST['id_teacher'];
                    $id_matter = $_POST['id_matter'];
                    $id_grade = $_POST['id_grade'];
                    $id_group = $_POST['id_group'];
                    $id_sede = $_POST['id_sede'];

                    $directivo->asign_teacher($id_teacher, $id_matter, $id_grade, $id_group, $id_sede);
                }else{
                    echo 1;
                }
                break;
            case 'finishconfig':
                if($_POST){
                    $directivo->finishConfig();
                }else{
                    echo 1;
                }
                break;
            case 'addstudent':
                if($_POST){
                    $first_name = $_POST['first_name'];
                    $second_name = $_POST['second_name'];
                    $first_lastname = $_POST['first_lastname'];
                    $second_lastname = $_POST['second_lastname'];
                    $id_group = $_POST['id_group'];

                    if(!empty($first_lastname) && !empty($first_lastname) && !empty($id_group)){
                        $directivo->addStudent($first_name, $second_name, $first_lastname, $second_lastname, $id_group);
                    }else{
                        echo 2;
                    }
                   
                }else {
                    echo 1;
                }
                break;
            case 'addcharge':
                if($_POST){
                    $id_teacher = $_POST['id_teacher'];
                    $id_matter = $_POST['id_matter'];
                    $id_group = $_POST['id_group'];

                    if(!empty($id_teacher) && !empty($id_matter) && !empty($id_group)){
                        $directivo->addCharge($id_teacher, $id_matter, $id_group);
                    }else{
                        echo 2;
                    }

                }else{
                    echo 1;
                }
                break; 
            case 'addindicatortorepository':
                if($_POST){
                    $indicator = $_POST['indicator'];
                    $author = $_POST['author'];
                    $matter = $_POST['matter'];
                    $period = $_POST['period'];
                    $grade = $_POST['grade'];

                    if(!empty($indicator) && !empty($author) && !empty($matter) && !empty($period) && !empty($grade)){
                        $directivo->addIndicatorToRepository($indicator, $author, $matter, $period, $grade);
                    }else{
                        echo 2;
                    }
                }else{  
                    echo 1;
                }
                break; 
            case 'reset':
                if($_POST){
                    $directivo->reset();
                }else{
                    echo 1;
                }
                break;
         }

    }
?>