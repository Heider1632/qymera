<?php
    if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 1):
      header('location: http://localhost:8888/qymera/redirec/');
    else:

      switch ($my_views[0]) {
        case 'add':
          // code...
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
