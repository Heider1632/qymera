<?php

session_start();

  require('core/core.php');

  if(isset($_GET['view'])) {

  $view = explode("/", strtolower($_GET['view']));

  $controller = $view[0];
  $my_views = array();
  for ($i = 1; $i < count($view); $i += 2) {
    $my_views[$view[$i]] = $view[$i + 1];
  }

  if((file_exists('core/controller/' . $controller . 'Controller.php'))){

    include ('core/controller/' . $controller . 'Controller.php');

  }else{

    include ('core/controller/errorController.php');
  }

} else {
  include ('core/controller/indexController.php');
}
?>
