<?php
    if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 1):
      header('location: http://localhost:8888/qymera/default/redirec/');
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

      switch($view[2]){
        case 'add':
          if($_POST){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $type = $_POST['type'];
            $id_indicator = $_POST['id_indicator'];

            $teacher->add_activity($title, $description, $start_date, $end_date, $type, $id_indicator);

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
        default:
          //header
          include 'views/overall/header.php';

          include 'views/user/actividades.php';
          //scripts
          include 'views/overall/scripts.php';
          break;
      }

    endif;
?>
