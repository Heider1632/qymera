<?php
	require_once('conexion.php');

	class Teacher{

	public function getValidation(){
		$db = new Conexion();

		$sql = $db->query('SELECT estado FROM usuario WHERE id = "'.$_SESSION['id'].'" LIMIT 1');

		$result = $db->consultaArreglo($sql);

		return $result;

		$db->close();
	}

	public function changePassword($new_password){
		$db = new Conexion();

		$db->query('UPDATE usuario SET clave = "'.md5($new_password).'",  estado = "1"  
			WHERE id = "'.$_SESSION['id'].'"');


		echo 3;

		$db->close();
	}
	/**
	 * [getInfTeacher description]
	 * @return [type] [description]
	 */
	public function getInfTeacher(){
		$db = new Conexion();

		$sql = 'SELECT materias.id, materias.nombre, grado.id, grado.nombre, grupo.id, grupo.nombre
								 FROM informacion_docente
								 INNER JOIN materias on informacion_docente.id_materia = materias.id
								 INNER JOIN grado on informacion_docente.id_grado = grado.id
								 INNER JOIN grupo on informacion_docente.id_grupo = grupo.id
								 WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'"';

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
	/**
	 * [updateInfTeacher description]
	 * @param  [type] $name     [description]
	 * @param  [type] $lastname [description]
	 * @return [type]           [description]
	 */
	public function updateInfTeacher($name, $lastname){
		$db = new Conexion();

		$db->query('UPDATE docentes SET nombre = "'.$name.'", apellido = "'.$lastname.'" WHERE id = "'.$_SESSION['id'].'"');

		$db->close();

		echo 3;

	}
	/**
	 * [studentDesc description]
	 * @param  [type] $id_student [description]
	 * @return [type]             [description]
	 */
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
	/**
	 * [getMateria description]
	 * @return [type] [description]
	 */
  public function getMateria(){

      $db = new Conexion();

      $consulta = 'SELECT materias.id, materias.nombre
                      FROM materias
                      INNER JOIN informacion_docente ON informacion_docente.id_materia = materias.id
                      WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'" GROUP BY id';

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
		/**
		 * [getGrado description]
		 * @param  [type] $id_materia [description]
		 * @return [type]             [description]
		 */
    public function getGrado($id_materia){

      $db = new Conexion();

      $consulta = 'SELECT grado.id, grado.nombre, grupo.id, grupo.nombre
										FROM informacion_docente
										INNER JOIN grado ON informacion_docente.id_grado = grado.id
										INNER JOIN grupo ON informacion_docente.id_grupo = grupo.id
										WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'"
										and informacion_docente.id_materia = "'.$id_materia.'"';

      $results = $db->query($consulta);

      while ($fila = $db->consultaArreglo($results)) {

            $grado[] = array(
              'id_grado' => $fila[0],
              'nombre_grado' => $fila[1],
              'id_grupo' => $fila[2],
              'nombre_grupo' => $fila[3]
            );
      }

      return $grado;

      $db->close();

    }
		/**
		 * [getGradoDesc description]
		 * @return [type] [description]
		 */
		public function getGradoDesc(){
			$db = new Conexion();

			$query = 'SELECT grado.id, grado.nombre
								FROM informacion_docente
								INNER JOIN grado ON informacion_docente.id_grado = grado.id
								WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'" GROUP BY grado.id ';

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
		/**
		 * [getGrupoDesc description]
		 * @return [type] [description]
		 */
		public function getGrupoDesc(){
			$db = new Conexion();

			$query = 'SELECT grupo.id, grupo.nombre
								FROM informacion_docente
								INNER JOIN grupo ON informacion_docente.id_grupo = grupo.id
								WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'" GROUP BY grupo.id';

			$results = $db->query($query);

			while($x = $db->consultaArreglo($results)){
				$grupoDesc[] = array(
					'id_grupo' => $x['id'],
					'grupo_nombre' => $x['nombre']
				);
			}

			return $grupoDesc;

			$db->close();
		}
		/**
		 * [descInformation description]
		 * @param  [type] $id_grado   [description]
		 * @param  [type] $id_grupo   [description]
		 * @param  [type] $id_materia [description]
		 * @return [type]             [description]
		 */
		public function descInformation($id_grado, $id_grupo, $id_materia){

			$db = new Conexion();

      $consulta = 'SELECT materias.nombre, grado.nombre, grupo.namescape
									 FROM information_docente
									 INNER JOIN materias on informacion_docente.id_materia = materias.id
									 INNER JOIN grado on informacion_docente.id_grado = grado.id
									 INNER JOIN grupo on informacion_docente.id_grupo = grupo.id
									 WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'"
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
		/**
		 * [listIdStudents description]
		 * @param  [type] $id_grado [description]
		 * @param  [type] $id_grupo [description]
		 * @return [type]           [description]
		 */
		public function listIdStudents($id_grado, $id_grupo){

		$db = new Conexion();

      	$consulta = 'SELECT id, n FROM estudiantes WHERE id_grado = "'.$id_grado.'" and id_grupo = "'.$id_grupo.'"';

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
		/**
		 * [getIndicadores description]
		 * @param  [type] $id_materia [description]
		 * @return [type]             [description]
		 */
		public function getIndicadores($id_materia){

		  $db = new Conexion();

		  $consulta = 'SELECT indicadores.id, indicadores.nombre, grado.nombre, indicadores.id_grupo
		                FROM indicadores
		                INNER JOIN grado ON indicadores.id_grado = grado.id
		                WHERE id_docente="'.$_SESSION['id'].'" and id_materia= "'.$id_materia.'" and id_periodo="1"';

		  $res = $db->query($consulta);

		  while($f = $db->consultaArreglo($res)) {

		    $indicators[] = array(
					'id' => $f['id'],
					'nombre' => $f[1],
		      'grado_nombre' => $f[2],
					'grupo_nombre' => $f[3]
		    );

		  }

		  return $indicators;

		  $db->close();
		}
		/**
		 * [add_indicador description]
		 * @param [type] $new_indicador [description]
		 * @param [type] $id_grado      [description]
		 * @param [type] $id_grupo      [description]
		 * @param [type] $id_materia    [description]
		 */
    public function add_indicador($new_indicador, $id_grado, $id_grupo, $id_materia){

      $db = new Conexion();

				$sql = 'SELECT * FROM indicadores 
				WHERE nombre = "'.$new_indicador.'" AND id_docente = "'.$_SESSION['id'].'" AND id_periodo = "'.$_SESSION['id_periodo'].'" AND id_materia = "'.$id_materia.'" LIMIT 1';

				$results = $db->query($sql);

				if($db->rows($results) > 0){
					echo 3;
				}else{
					$db->query('INSERT INTO indicadores (nombre, id_docente, id_grado, id_grupo, id_materia, id_periodo)
					VALUES ("'.$new_indicador.'", "'.$_SESSION['id'].'", "'.$id_grado.'", "'.$id_grupo.'", "'.$id_materia.'", "'.$_SESSION['id_periodo'].'")');

					echo 4;
				}

				$db->close();
    }
		/**
		 * [edit_indicador description]
		 * @param  [type] $id_indicador   [description]
		 * @param  [type] $edit_indicador [description]
		 * @return [type]                 [description]
		 */
		public function edit_indicador($id_indicador, $edit_indicador){
			$db = new Conexion();
			$sql = 'UPDATE indicadores SET nombre = "'.$edit_indicador.'" WHERE indicadores.id = "'.$id_indicador.'"';
			$db->query($sql);
			echo 3;

			$db->close();
		}
		/**
		 * [del_indicador description]
		 * @param  [type] $id_indicador [description]
		 * @return [type]               [description]
		 */
		public function del_indicador($id_indicador){
			$db = new Conexion();

			$sql = 'DELETE FROM indicadores where id = "'.$id_indicador.'"';

			$db->query($sql);

			echo 4;

			$db->close();
		}
		/**
		 * [getNotes description]
		 * @param  [type] $id_materia  [description]
		 * @param  [type] $id_grado    [description]
		 * @param  [type] $id_grupo    [description]
		 * @param  [type] $indicadores [description]
		 * @return [type]              [description]
		 */
		public function getNotes($id_materia, $id_grado, $id_grupo, $indicadores){
			$db = new Conexion();

			for ($i=0; $i < count($indicadores); $i++) {
				$id = $indicadores[$i]['id'];
				 $array_subquery[$i] = '(SELECT nota FROM notas WHERE id_indicador = "'.$id.'" AND id_periodo = "1" AND id_materia = "'.$id_materia.'"
 					AND id_grado = "'.$id_grado.'" AND id_grupo = "'.$id_grupo.'" AND id_docente = "'.$_SESSION['id'].'") as nota'.$i.'';
			}

			$subquery = implode(',', $array_subquery);

			$sql = 'SELECT * FROM
				'.$subquery.'';

			$results = $db->query($sql);

			while($f = $db->consultaArreglo($results)){
				$notas[] = $f;
			}

			return $notas;

			$db->close();
		}
		/**
		 * [putNotesList description]
		 * @param  [type] $notes      [description]
		 * @param  [type] $id_grado   [description]
		 * @param  [type] $id_grupo   [description]
		 * @param  [type] $id_periodo [description]
		 * @param  [type] $id_materia [description]
		 * @param  [type] $id_docente [description]
		 * @return [type]             [description]
		 */
		public function putNotesList($notes, $id_grado, $id_grupo, $id_periodo, $id_materia, $id_docente){
			$db = new Conexion();

			foreach ($notes as $n) {

				$sql = 'INSERT INTO notas (nota, id_indicador, id_periodo, id_estudiante, id_grado, id_grupo, id_materia, id_docente) VALUES ("'.$n['nota'].'", "'.$n['indicador'].'", "'.$id_periodo.'", "'.$n['id'].'", "'.$id_grado.'", "'.$id_grupo.'", "'.$id_materia.'", "'.$id_docente.'")';

				$db->query($sql);
			}

			header('Location: notas');

			$db->close();
		}
		/**
		 * [editNotesList description]
		 * @param  [type] $notes [description]
		 * @return [type]        [description]
		 */
		public function editNotesList($notes){
			$db = new Conexion();

			foreach($notes as $note){
				$db->query('UPDATE notas SET nota = "'.$note['nota'].'"
				WHERE id =  "'.$note['id'].'"');
			}

			header('Location: notas');

			$db->close();
		}
		/**
		 * [putNote description]
		 * @param  [type] $note           [description]
		 * @param  [type] $id_estudiantes [description]
		 * @param  [type] $id_indicador   [description]
		 * @param  [type] $id_grado       [description]
		 * @param  [type] $id_grupo       [description]
		 * @param  [type] $id_periodo     [description]
		 * @param  [type] $id_materia     [description]
		 * @param  [type] $id_docente     [description]
		 * @return [type]                 [description]
		 */
		public function putNote($note, $id_estudiantes, $id_indicador, $id_grado, $id_grupo, $id_periodo, $id_materia, $id_docente){
			$db = new Conexion();

				$db->query('INSERT INTO notas (nota, id_indicador, id_periodo, id_estudiante, id_grado, id_grupo, id_materia, id_docente)
				VALUES("'.$note.'", "'.$id_indicador.'", "'.$id_periodo.'", "'.$id_estudiante.'". "'.$id_grado.'". "'.$id_grupo.'", "'.$id_materia.'", "'.$id_docente.'")
				');

			header('Location: notas');

			$db->close();
		}
		/**
		 * [editNote description]
		 * @param  [type] $note [description]
		 * @param  [type] $id   [description]
		 * @return [type]       [description]
		 */
		public function editNote($note, $id){
			$db = new Conexion();

			$db->query('UPDATE notas SET nota = "'.$note.'" WHERE id =  "'.$id.'"');

			header('Location: notas');

			$db->cerrar();
		}
		/**
		 * [add_activity description]
		 * @param [type] $title        [description]
		 * @param [type] $description  [description]
		 * @param [type] $start_date   [description]
		 * @param [type] $end_date     [description]
		 * @param [type] $state        [description]
		 * @param [type] $id_indicator [description]
		 */
		public function add_activity($title, $description, $type, $start_date, $end_date, $id_indicator){
			$db = new Conexion();

			$sql = $db->query('SELECT * FROM actividades WHERE titulo = "'.$title.'" AND id_indicador = "'.$id_indicator.'" LIMIT 1');

			$exist = $db->verificarFila($sql);

			if($exist > 0){
					echo 3;
			}else{
				$db->query('INSERT INTO actividades (nombre, tipo, descripcion, fecha_asignacion, fecha_revision, id_docente, id_indicador)
				VALUES ("'.$title.'", "'.$type.'", "'.$description.'", "'.$start_date.'", "'.$end_date.'", "'.$_SESSION['id'].'", "'.$id_indicator.'")');

				echo 4;
			}

			$db->close();
		}
		/**
		 * [getActivitys description]
		 * @return [type] [description]
		 */
		public function getActivitys(){
			$db = new Conexion();

			$sql = 'SELECT actividades.id, actividades.nombre, actividades.tipo, actividades.descripcion, actividades.fecha_asignacion, actividades.fecha_revision, indicadores.nombre FROM actividades
			INNER JOIN indicadores ON indicadores.id = actividades.id_indicador
			WHERE actividades.id_docente = "'.$_SESSION['id'].'"';

			$results = $db->query($sql);

			while($f = $db->consultaArreglo($results)){
				$activitys[] = array(
					'id' => $f['id'],
					'title' => $f[1],
					'type' => $f['tipo'],
					'description' => $f['descripcion'],
					'date_start' => $f['fecha_asignacion'],
					'date_finish' => $f['fecha_revision'],
					'name_indicator' => $f[6]
				);
			}

			return $activitys;

			$db->close();
		}

	}
?>
