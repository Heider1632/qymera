<?php

session_start();

  require('core/core.php');

  if(isset($_GET['view'])) {

  $view = explode("/", strtolower($_GET['view']));
  $folder = $view[0];
  $controller = $view[1];
  $my_views = array();
  for ($i = 1; $i < count($view); $i += 2) {
    $my_views[$view[$i]] = $view[$i + 1];
  }

  switch ($folder) {
    case 'coordinator':
      if((file_exists('core/controller/'. $folder. '/' . $controller . 'Controller.php'))){
        include ('core/controller/'. $folder. '/' . $controller . 'Controller.php');
      }else{
        include ('core/controller/default/errorController.php');
      }
      break;
    case 'teacher':
      if((file_exists('core/controller/'. $folder. '/' . $controller . 'Controller.php'))){
        include ('core/controller/'.$folder.'/' . $controller . 'Controller.php');
      }else{
        include ('core/controller/default/errorController.php');
      }
      break;
    case 'default':
      if((file_exists('core/controller/'. $folder. '/' . $controller . 'Controller.php'))){
        include ('core/controller/'. $folder. '/' . $controller . 'Controller.php');
      }else{
        include ('core/controller/default/errorController.php');
      }
      break;
    default:
      if((file_exists('core/controller/' . $folder . 'Controller.php'))){
        include ('core/controller/' . $folder . 'Controller.php');
      }else{
        include ('core/controller/default/errorController.php');
      }
      break;
  }

} else {
  include ('core/controller/indexController.php');
}
?>
