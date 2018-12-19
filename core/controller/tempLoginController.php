<?php

  # Leemos las variables enviadas mediante Ajax
  $token = $_POST['token'];

  # Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
  if (empty($token)){
      # mostramos la respuesta de php (echo)
      echo 'error_1';
  }else{
    # Incluimos la clase usuario
    require_once('../model/usuario.php');

    # Creamos un objeto de la clase usuario
    $usuario = new Usuario();

    # Llamamos al metodo login para validar los datos en la base de datos
    $usuario->tempLogin($token);
  }
