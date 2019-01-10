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
          include 'public/overall/header.php';

            echo "hola";
          //scripts
          include 'public/overall/scripts.php';
          break;
      }

    endif;
?>
