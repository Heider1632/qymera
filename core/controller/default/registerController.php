<?php

  # Leemos las variables enviadas mediante Ajax
  $email = $_POST['correo'];
  $clave = $_POST['clave'];

  # Verificamos que los campos no esten vacios, el chiste de este if es que si almenos una variable (o campo) esta vacio mostrara error_1
  if(empty($email) || empty($clave)){

    # mostramos la respuesta de php (echo)
    echo 'error_1';

  }else{

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){

        # Incluimos la clase usuario
        require_once '../model/usuario.php';

        # Creamos un objeto de la clase usuario
        $usuario = new Usuario();

        # Llamamos al metodo login para validar los datos en la base de datos
        $usuario->register($email, $clave);

    }else{
      echo 'error_2';
    }

  }


?>
