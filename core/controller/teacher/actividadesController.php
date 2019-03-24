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

       $matters = $teacher->getMateria();

      switch($view[2]){
        case 'add':
          if($_POST){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $type = $_POST['type'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $id_indicator = $_POST['id_indicator'];

            if(!empty($title) || !empty($id_indicator)){
              $teacher->add_activity($title, $description, $type, $start_date, $end_date, $id_indicator);
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
