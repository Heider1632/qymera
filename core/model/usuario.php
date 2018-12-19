<?php
  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');

  class Usuario{
  //functiones del usuario...//

    public function login($email, $clave)
    {
      # Nos conectamos a la base de datos
      $db = new Conexion();

      // traemos el id y el nombre de la tabla usuarios donde el usuario sea igual al usuario ingresado y ademas la clave sea igual a la ingresada para ese usuario.
      $query = $db->query('SELECT id, cargo from usuario where email="'.$email.'" and clave= "'.$clave.'"');

      $verificar_usuario = $db->rows($query);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){

        $user = $db->consultaArreglo($query);

        $inf = $db->query('SELECT nombre, apellido, foto from docentes where id = "'.$user['id'].'"');

        $datos = $db->consultaArreglo($inf);

        session_start();

        $_SESSION['id']     = $user['id'];
        $_SESSION['cargo']  = $user['cargo'];
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['apellido'] = $datos['apellido'];
        $_SESSION['foto'] = $datos['foto'];

        // Verificamos que cargo tiene l usuario y asi mismo dar la respuesta a ajax para que redireccione
        if($_SESSION['cargo'] == 1){

          echo "admin";

        }else if($_SESSION['cargo'] == 2){

          echo "home";

          $consulta = 'SELECT director_grupo FROM docentes WHERE id = "'.$_SESSION['id'].'"';

          $results = $db->query($consulta);

          while ($fila = $db->consultaArreglo($results)) {

            $_SESSION['director_grupo'] = $fila['director_grupo'];

            }
          }

      }else{
        // El usuario y la clave son incorrectos
        echo 'error_2';
      }
      # Cerramos la conexion
      $db->close();
    }

    public function tempLogin($token){
      $db = new Conexion();

      // traemos el id y el nombre de la tabla usuarios donde el usuario sea igual al usuario ingresado y ademas la clave sea igual a la ingresada para ese usuario.
      $query = $db->query('SELECT id, cargo from usuario where token = "'.$token.'"');


      $verificar_usuario = $db->rows($query);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){

        $user = $db->consultaArreglo($query);

        $inf = $db->query('SELECT nombre, apellido from docentes where id = "'.$user['id'].'"');

        $datos = $db->consultaArreglo($inf);

        session_start();

        $_SESSION['id']     = $user['id'];
        $_SESSION['cargo']  = $user['cargo'];
        $_SESSION['nombre'] = $datos['nombre'];
        $_SESSION['apellido'] = $datos['apellido'];

        // Verificamos que cargo tiene l usuario y asi mismo dar la respuesta a ajax para que redireccione
        if($_SESSION['cargo'] == 1){

          echo "admin";

        }else if($_SESSION['cargo'] == 2){

          echo "home";

          $consulta = 'SELECT director_grupo FROM docentes WHERE id = "'.$_SESSION['id'].'"';

          $results = $db->query($consulta);

          while ($fila = $db->consultaArreglo($results)) {

            $_SESSION['director_grupo'] = $fila['director_grupo'];

            }

          }

      }else{
        // El token es incorrecto
        echo 'error_2';
      }
      # Cerramos la conexion
      $db->close();
    }

    public function register($email, $clave)
    {
      $db = new Conexion();


      $email = $db->filtrar($email);
      $clave = $db->filtrar($clave);


      // validar que el correo no exito
      $verificarCorreo = $db->rows('select id from usuarios where email="'.$email.'" LIMIT 1');


      if($verificarCorreo > 0){

        echo 'error_3';

      }else{

        $keyreg = md5(time());

        $link  = APP_URL . '?view=activar&key=' . $keyreg;

        $db->query('insert into usuarios(email, clave, keyregister) values("'.$email.'", MD5("'.$clave.'"), "'.$keyreg.'")');

        $_SESSION['nombre'] = $nombre;
        $_SESSION['apellido'] = $apellido;

        $sql_cargo = $db->query('select cargo from usuario where nombre = "'.$nombre.'" and apellido = "'.$apellido.'" LIMIT 1');

        $cargo = $db->consultaArreglo($sql_cargo);

        $_SESSION['cargo']  = $cargo[0];

      }

      $db->close();
    }
  }
?>
