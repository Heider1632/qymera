<?php
	require_once('conexion.php');

	class Teacher{
	// function class teacher//
	public function getInfTeacher(){
		$db = new Conexion();

		$sql = 'SELECT materias.id, materias.nombre, grado.id, grado.nombre, grupo.id, grupo.namescape
								 FROM information_docente
								 INNER JOIN materias on information_docente.id_materia = materias.id
								 INNER JOIN grado on information_docente.id_grado = grado.id
								 INNER JOIN grupo on information_docente.id_grupo = grupo.id
								 WHERE information_docente.id_docente = "'.$_SESSION['id'].'"';

		$results = $db->query($sql);

		while($fila = $db->consultaArreglo($results)){

			$Arrayteacher[] = array(
				'id_materia' => $fila[0],
				'materia_nombre' => $fila[1],
				'id_grado' => $fila[2],
				'grado_nombre' => $fila[3],
				'id_grupo' => $fila[4],
				'grupo_nombre' => $fila[5],
			);

		}

		return $Arrayteacher;

		$db->close();
	}

	public function studentDesc($id_student){
		$db = new Conexion();

		$query = 'SELECT * FROM estudiantes WHERE id = "'.$id_student.'"';

		$results = $db->query($query);

		while($x = $db->consultaArreglo($results)){
			$students[] = array(
				'id_student' => $x['id'],
				'foto' => $x['foto'],
				'primer_nombre' => $x['primer_nombre'],
				'segundo_nombre' => $x['segundo_nombre'],
				'primer_apellido' => $x['primer_apellido'],
				'segundo_apellido' => $x['segundo_apellido']
			);
		}

		return $students;

		$db->close();
	}

	// Obtener una materia correpondiente al docente en linea //
    public function getMateria(){

      $db = new Conexion();

      $consulta = 'SELECT materias.id, materias.nombre
                      FROM materias
                      INNER JOIN information_docente ON information_docente.id_materia = materias.id
                      WHERE information_docente.id_docente = "'.$_SESSION['id'].'" GROUP BY id';

      $results = $db->query($consulta);

      while ($fila = $db->consultaArreglo($results)) {

            $array[] = array(

              'materia_id' => $fila['id'],
              'materia_nombre' => $fila['nombre']

            );
      }

      return $array;

      $db->close();

    }

    // obtiene los grados en los cuales el docente esta inscrito //

    public function getGrado($id_materia){

      $db = new Conexion();

      $consulta = 'SELECT grado.id, grado.nombre, grupo.id, grupo.namescape
										FROM information_docente
										INNER JOIN grado ON information_docente.id_grado = grado.id
										INNER JOIN grupo ON information_docente.id_grupo = grupo.id
										WHERE information_docente.id_docente = "'.$_SESSION['id'].'"
										and information_docente.id_materia = "'.$id_materia.'"';

      $results = $db->query($consulta);

      while ($fila = $db->consultaArreglo($results)) {

            $grado[] = array(

              'id_grado' => $fila[0],
              'nombre_grado' => $fila['nombre'],
              'id_grupo' => $fila[2],
              'nombre_grupo' => $fila['namescape']

            );
      }

      return $grado;

      $db->close();

    }

		public function getGradoDesc(){
			$db = new Conexion();

			$query = 'SELECT grado.id, grado.nombre
								FROM information_docente
								INNER JOIN grado ON information_docente.id_grado = grado.id
								WHERE information_docente.id_docente = "'.$_SESSION['id'].'" GROUP BY grado.id ';

			$results = $db->query($query);

			while($x = $db->consultaArreglo($results)){
				$gradoDesc[] = array(
					'id_grado' => $x['id'],
					'grado_nombre' => $x['nombre']
				);
			}

			return $gradoDesc;

			$db->close();
		}

		public function descInformation($id_grado, $id_grupo, $id_materia){

			$db = new Conexion();

      $consulta = 'SELECT materias.nombre, grado.nombre, grupo.namescape
									 FROM information_docente
									 INNER JOIN materias on information_docente.id_materia = materias.id
									 INNER JOIN grado on information_docente.id_grado = grado.id
									 INNER JOIN grupo on information_docente.id_grupo = grupo.id
									 WHERE information_docente.id_docente = "'.$_SESSION['id'].'"
									 AND information_docente.id_grado = "'.$id_grado.'"
									 AND information_docente.id_grupo = "'.$id_grupo.'"
									 AND information_docente.id_materia = "'.$id_materia.'"';

      $results = $db->query($consulta);

      while ($fila = $db->consultaArreglo($results)) {

            $descInformation[] = array(
							'nombre_materia' => $fila[0],
              'nombre_grado' => $fila[1],
              'nombre_grupo' => $fila['namescape'],
            );
      }

      return $descInformation;

      $db->close();

    }

		public function listIdStudents($id_grado, $id_grupo){

			$db = new Conexion();

      $consulta = 'SELECT id, n FROM estudiantes
										WHERE id_grado = "'.$id_grado.'" and id_grupo = "'.$id_grupo.'"';

      $results = $db->query($consulta);

      while ($fila = $db->consultaArreglo($results)) {

            $idStudents[] = array(
							'id_student' => $fila['id'],
							'n' => $fila['n']
            );
      }

      return $idStudents;

      $db->close();

		}

		public function getIndicadores($id_docente, $id_materia, $id_periodo){

		  $db = new Conexion();

		  $consulta = 'SELECT indicadores.id, indicadores.n, indicadores.nombre, grado.nombre
		                FROM indicadores
		                INNER JOIN grado ON indicadores.id_grado = grado.id
		                WHERE id_docente="'.$id_docente.'" and id_materia= "'.$id_materia.'" and id_periodo="'.$id_periodo.'"';

		  $res = $db->query($consulta);

		  while($f = $db->consultaArreglo($res)) {

		    $indicators[] = array(
					'id' => $f['id'],
		      'n' => $f['n'],
					'nombre' => $f[2],
		      'grado_nombre' => $f[3],
		    );

		  }

		  return $indicators;

		  $db->close();
		}

    //Insertar un indicador //

     public function add_indicador($n, $new_indicador, $id_docente, $id_grado, $id_materia, $id_periodo){

      $db = new Conexion();

				$sql = 'SELECT * FROM indicadores WHERE nombre = "'.$new_indicador.'" AND id_docente = "'.$id_docente.'" AND id_periodo = "'.$id_periodo.'" AND id_materia = "'.$id_materia.'" LIMIT 1';

				$results = $db->query($sql);

				if($db->rows($results) > 0){
					echo 3;
				}else{
					$db->query('INSERT INTO indicadores (n, nombre, id_docente, id_grado, id_materia, id_periodo)
					VALUES ("'.$n.'", "'.$new_indicador.'", "'.$id_docente.'", "'.$id_grado.'", "'.$id_materia.'", "'.$id_periodo.'")');

					echo 4;
				}

				$db->close();
    }

		public function edit_indicador($id_indicador, $edit_indicador){
			$db = new Conexion();
			$sql = 'UPDATE indicadores SET nombre = "'.$edit_indicador.'" WHERE indicadores.id = "'.$id_indicador.'"';
			$db->query($sql);
			echo 3;

			$db->close();
		}

		public function del_indicador($id_indicador){
			$db = new Conexion();

			$sql = 'DELETE FROM indicadores where id = "'.$id_indicador.'"';

			$db->query($sql);

			echo 4;

			$db->close();
		}

		public function getNota(){
			$db = new Conexion();

			$sql = '';

			$results = $db->query($sql);

			while($f = $db->consultaArreglo($results)){
				$notas[] = array(
					'nombre_estudiante' => $f['nombre'],
					'nombre_indicador' => $f['nombre'],
					'nota' => $f['nota'],
				);
			}

			return $notas;

			$db->close();
		}

		public function uploadImageProfile($fileName, $fileType, $file){
			if ($fileName!="")
			{
					//Limitar el tipo de archivo y el tamaño
					if (!((strpos($fileType, "gif") || strpos($fileType, "jpeg") || strpos($fileType, "png") || strpos($fileType, "jpg"))))
					{
							echo 2;
					}
					else
					{
							$res = explode(".", $fileName);
							$extension = $res[count($res)-1];
							$nombre= date("YmdHis")."." . $extension; //renombrarlo como nosotros queremos
							$dirtemp = "public/upload/temp/".$nombre."";//Directorio temporaral para subir el fichero

							if (is_uploaded_file($file)) {
									copy($file, $dirtemp);

									echo 4;

									//unlink($dirtemp); //Borrar el fichero temporal
								 }
							else
							{
									echo 3;
							}

					}
			} else {
				echo 2;
			}
		}

		public function updateInfTeacher($name, $lastname, $email, $password){
			$db = new Conexion();

			$sql = 'UPDATE usuario SET email = "'.$email.'", clave = "'.$password.'" WHERE id = "'.$_SESSION['id'].'"';

			$db->query($sql);

			$db->close();

			echo 2;

		}

		public function updateUser(){
			$db = new Conexion();

			$db->query('UPDATE docentes SET nombre = "'.$name.'", apellido = "'.$lastname.'" WHERE id = "'.$_SESSION['id'].'"');

			$db->close();

			echo 3;

		}

	}
?>
