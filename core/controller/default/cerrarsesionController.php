<?php

  // Eliminamos la sesion
  session_start();
  session_destroy();

  header('location: http://localhost:8888/qymera/default/login/');

?>
