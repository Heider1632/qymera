<?php
    if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 1):
      header('location:' .APP_URL.  'default/redirec/');
    else:
      require_once 'core/model/teacher.php';
      /**
       * [$teacher description]
       * @var Teacher
       */
      $teacher = new Teacher();
      /**
       * [switch description]
       * @var [type]
       */

       $matters = $teacher->getMatters();

      switch($view[2]){
        case 'uploadevidence':

           //header
           include 'views/overall/header.php';

           include 'views/overall/teacher/_uploadEvidence.php';
           //scripts
           include 'views/overall/scripts.php';

          break;
        case 'uploadimage':
          if($_POST){
            // Recibo los datos de la imagen
            $filetemp = $_FILES['file']['tmp_name'];
            $filename = $_FILES['file']['name'];
            $filetype = $_FILES['file']['type'];
            $filesize = $_FILES['file']['size'];
            
            //Si existe imagen y tiene un tamaño correcto
            if (($filename == !NULL) && ($filetype <= 200000)) 
              {
              //indicamos los formatos que permitimos subir a nuestro servidor
              if (($filetype == "image/gif")
              || ($filetype == "image/jpeg")
              || ($filetype == "image/jpg")
              || ($filetype == "image/png"))
                {
                  
                  $teacher->uploadEvidence($filetemp, $filename);
                  
                } 
              else 
                {
                  //si no cumple con el formato
                  echo 2;
                }
              } 
              else 
              {
              //si existe la variable pero se pasa del tamaño permitido
              if($filename == !NULL) echo 3; 
            }
          }else{
            echo 1;
          }
          break;
        case 'add':
          if($_POST){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $type = $_POST['type'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $evaluate_date = $_['evaluate_date'];
            $percentage = $_POST['percentage'];
            $id_indicator = $_POST['id_indicator'];

            if(!empty($title) || !empty($percentage) || !empty($id_indicator)){
              $teacher->add_activity($title, $description, $type, $start_date, $end_date, $evaluate_date, $percentage, $id_indicator);
            }else{
              echo 2;
            }

          }else {
            echo 1;
          }
          break;
        case 'edit':
          // code...
          break;
        case 'del':
          // code...
          break;
        case 'nueva':
          $id_materia = $view[3];

          $indicadores = $teacher->getIndicadores($id_materia);
          //header
          include 'views/overall/header.php';

          include 'views/user/actividades.php';
          //scripts
          include 'views/overall/scripts.php';
          break;
        default:
          $activitys = $teacher->getActivitys();
          //header
          include 'views/overall/header.php';

          include 'views/user/pre-actividad.php';
          //scripts
          include 'views/overall/scripts.php';
          break;
      }

    endif;
?>
