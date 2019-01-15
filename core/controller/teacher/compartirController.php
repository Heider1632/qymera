<?php
	if(!isset($_SESSION['id']) || $_SESSION['cargo'] == 1):
		header('location: http://localhost:8888/qymera/default/redirec/');
	else:
	/*  schema that allow callback the functions */

  switch ($view[1]) {
    case 'send':
      if($_POST){

      }else {
        echo 1;
      }
      break;
    default:
    /* home view */
      /* header */
      include 'views/overall/header.php';

      /* template home */
      include 'views/overall/compartir.php';

      /* scripts*/
      include 'views/overall/scripts.php';
      break;
  }
	endif;
?>
