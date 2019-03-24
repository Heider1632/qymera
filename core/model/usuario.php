<?php
  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');

  class Usuario{
    /**
     * [login description]
     * @param  [type] $email [description]
     * @param  [type] $clave [description]
     * @return [type]        [description]
     */
    public function login($email, $clave){
      # Nos conectamos a la base de datos
      $db = new Conexion();

      // traemos el id y el nombre de la tabla usuarios donde el usuario sea igual al usuario ingresado y ademas la clave sea igual a la ingresada para ese usuario.
      $query = $db->query('SELECT id, cargo from usuario where correo="'.$email.'" and clave= "'.$clave.'"');

      $verificar_usuario = $db->rows($query);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){

        $user = $db->consultaArreglo($query);

        session_start();

        $_SESSION['id'] = $user['id'];
        $_SESSION['cargo']  = $user['cargo'];

        // Verificamos que cargo tiene l usuario y asi mismo dar la respuesta a ajax para que redireccione
        if($_SESSION['cargo'] == 1){
          $inf_director = $db->query('SELECT nombre, apellido, foto, rol 
            from director where id = "'.$user['id'].'"');

          $datos = $db->consultaArreglo($inf_director);

          $_SESSION['nombre_completo'] = $datos['nombre'] . " " . $datos['apellido'];
          $_SESSION['foto'] = $datos['foto'];

          //redirec
          echo APP_URL . "directivo/home/";

        }else if($_SESSION['cargo'] == 2){

          $inf_docente = $db->query('SELECT primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, foto from docentes where id = "'.$user['id'].'"');

          $datos = $db->consultaArreglo($inf_docente);

          $_SESSION['nombres'] = $datos['primer_nombre'] . " " . $datos['segundo_nombre'];
          $_SESSION['apellidos'] = $datos['primer_apellido'] . " " . $datos['segundo_apellido'];
          $_SESSION['nombre_completo'] = $datos['primer_nombre'] . " " . $datos['primer_apellido'];
          $_SESSION['foto'] = $datos['foto'];

          $consulta = 'SELECT director FROM docente WHERE id = "'.$_SESSION['id'].'"';

          $results = $db->query($consulta);

          while ($fila = $db->consultaArreglo($results)){

            $_SESSION['director_grupo'] = $fila['director'];

          }

          //redirec
          echo APP_URL . "teacher/home/";
          }else{
            echo 'error';
          }

      }else{
        // El usuario y la clave son incorrectos
        echo 'error_2';
      }
      # Cerramos la conexion
      $db->close();
    }
    /**
     * [tempLogin description]
     * @param  [type] $token [description]
     * @return [type]        [description]
     */
    public function tempLogin($token){
      $db = new Conexion();

      // traemos el id y el nombre de la tabla usuarios donde el usuario sea igual al usuario ingresado y ademas la clave sea igual a la ingresada para ese usuario.
      $query = $db->query('SELECT id, cargo from usuario where token = "'.$token.'"');


      $verificar_usuario = $db->rows($query);

      // si la consulta es mayor a 0 el usuario existe
      if($verificar_usuario > 0){

        $user = $db->consultaArreglo($query);

        $inf = $db->query('SELECT primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, foto from docente where id = "'.$user['id'].'"');

        $datos = $db->consultaArreglo($inf);

        session_start();

        $_SESSION['id'] = $user['id'];
        $_SESSION['cargo']  = $user['cargo'];
        $_SESSION['nombres'] = $datos['primer_nombre'] . " " . $datos['segundo_nombre'];
        $_SESSION['apellidos'] = $datos['primer_apellido'] . " " . $datos['segundo_apellido'];
        $_SESSION['nombre_completo'] = $datos['primer_nombre'] . " " . $datos['primer_apellido'];
        $_SESSION['foto'] = $datos['foto'];

        // Verificamos que cargo tiene l usuario y asi mismo dar la respuesta a ajax para que redireccione
        if($_SESSION['cargo'] == 1){

          echo APP_URL . "directivo/home/";

        }else if($_SESSION['cargo'] == 2){


          echo APP_URL . "teacher/home/";

          $consulta = 'SELECT director FROM docente WHERE id = "'.$_SESSION['id'].'"';

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
    /**
     * [register description]
     * @param  [type] $email [description]
     * @param  [type] $clave [description]
     * @return [type]        [description]
     */
    public function register($email, $clave, $firts_name, $second_name, $firts_lastname, $second_lastname){

      $db = new Conexion();

      // validar que el correo no existe
      $verificarCorreo = $db->rows('SELECT id FROM usuarios WHERE email="'.$email.'" LIMIT 1');

      if($verificarCorreo > 0){

        echo 'error_3';

      }else{

        $token = md5(time());

        $db->query('INSERT INTO usuario (correo, clave, token) VALUES ("'.$email.'", MD5("'.$clave.'"), "'.$token.'")');

        echo APP_URL . 'login/';

      }

      $db->close();
    }
    /**
     * [uploadImageProfile description]
     * @param  [type] $fileName [description]
     * @param  [type] $fileType [description]
     * @param  [type] $file     [description]
     * @return [type]           [description]
     */
    public function uploadImageProfile($fileName, $fileType, $file){
      if ($fileName!="")
      {
          //Limitar el tipo de archivo y el tamaño
          if (!((strpos($fileType, "jpeg") || strpos($fileType, "png")))){
              echo 2;
          }else{
          $db = new Conexion();
              $res = explode(".", $fileName);
              $extension = $res[count($res)-1];
              $nombre= strtolower($_SESSION['nombre'])."." . $extension; //renombrarlo como nosotros queremos
              $dirtemp = "public/upload/temp/".$nombre."";//Directorio temporaral para subir el fichero

              if (is_uploaded_file($file)) {
                  move_uploaded_file($file, $dirtemp);
                  mkdir("public/media/teachers/".$_SESSION['id']."");
                  $dir = "public/media/teachers/".$_SESSION['id']."/".$nombre."";
                  $db->query('UPDATE docente SET foto = "'.$dir.'" WHERE id = "'.$_SESSION['id'].'"');
                  copy($dirtemp, $dir);
                  unlink($dirtemp); //Borrar el fichero temporal
                  echo 4;
                  $db->close();
                  }else{
                  echo 3;
                }
              }
      }else {
        echo 2;
      }
    }

    /*public function updateUser($name, $lastname){
      $db = new Conexion();

      $sql = 'UPDATE usuario SET email = "'.$email.'", clave = "'.$password.'" WHERE id = "'.$_SESSION['id'].'"';

      $db->query($sql);

      $db->close();

      echo 2;

    }*/
  }
?>
