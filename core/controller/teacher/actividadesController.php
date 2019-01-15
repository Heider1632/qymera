<?php
    if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 1):
      header('location: http://localhost:8888/qymera/redirec/');
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
      switch ($my_views[0]) {
        case 'add':
          if($_POST){
            $title = $_POST['title'];
            $description = $_POST['description'];
            $start_date = $_POST['start_date'];
            $end_date = $_POST['end_date'];
            $state = $_POST['state'];
            /*if(!empty($title) || !empty($description) || !empty($start_date) || !empty($end_date) || !empty($id_indicator)){
              $id_indicator = $_POST['id_indicator'];
              $teacher->add_activity($title, $description, $start_date, $end_date, $id_indicator);
            }else{
              echo 2:
            }*/
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
