<?php
	if(!isset($_SESSION['id'])):
		header('location: index.php');
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
