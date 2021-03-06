<?php
	require_once('conexion.php');

	class Teacher{
	/**
	 * [getValidation description]
	 * @return [type] [description]
	 */
	public function getValidation(){
		$db = new Conexion();

		$sql = $db->query('SELECT estado FROM usuario WHERE id = "'.$_SESSION['id'].'" LIMIT 1');

		$result = $db->consultaArreglo($sql);

		return $result;

		$db->close();
	}
	/**
	 * [changePassword description]
	 * @param  [type] $new_password [description]
	 * @return [type]               [description]
	 */
	public function changePassword($new_password){
		$db = new Conexion();

		$db->query('UPDATE usuario SET clave = "'.md5($new_password).'",  estado = "1"  
			WHERE id = "'.$_SESSION['id'].'"');


		echo 3;

		$db->close();
	}
	/**
	 * [uploadEvidence description]
	 * @return [type] [description]
	 */
	public function uploadEvidence($filetemp, $filename){

          $res = explode(".", $filename);
          $extension = $res[count($res)-1];
					$nombre= strtolower(md5(time()))."." . $extension; //renombrarlo como nosotros queremos
					// Ruta donde se guardarán las imágenes que subamos
					$dirtemp = APP_URL . "public/upload/temp/".$nombre."";

            if (is_uploaded_file($filetemp)) {
								//acess permiss
								chmod($filetemp, 0777);

								$dir = "public/media/evidence/".$nombre."";

								if(copy($filetemp, $dirtemp)){
									echo "upload file";
								}else{
									echo "error";
								}

								
								// Muevo la imagen desde el directorio temporal a nuestra ruta indicada anteriormente
								/*if(move_uploaded_file($filetemp, $dirtemp)){
										// Estructura de la carpeta deseada
									mkdir(APP_URL . "public/media/evidence/");
									// directorio especifico de el archivo de las evidencias
									$dir = APP_URL . "public/media/evidence/".$nombre."";
									//movemos el archivo temporal a su destino final
									copy($dirtemp, $dir);
									unlink($dirtemp); //Borrar el fichero temporal
									$array_images[] = $dir;
								
									$_SESSION['images-evidence'] = $array_images;

                	echo $dir;
								}else{
									echo "Ocurrió algún error al subir el fichero. No pudo guardarse.";
								}*/
            }else{
              echo 3;
            }
	}
	/**
	 * [getInfTeacher description]
	 * @return [type] [description]
	 */
	public function getInformationTeacher(){
		$db = new Conexion();

		$sql = 'SELECT materias.id, materias.nombre, 
		(SELECT grado.id FROM grupos INNER JOIN grado ON grupos.id_grado = grado.id WHERE grupos.id = (SELECT id_grupo FROM informacion_docente WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'")) as GradoID, (SELECT grado.nombre FROM grupos INNER JOIN grado ON grupos.id_grado = grado.id WHERE grupos.id = (SELECT id_grupo FROM informacion_docente WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'")) as GradoNombre, (SELECT grupo.id FROM grupos INNER JOIN grupo ON grupos.id_grado = grupo.id WHERE grupos.id = (SELECT id_grupo FROM informacion_docente WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'")) as GrupoID, (SELECT grupo.nombre FROM grupos INNER JOIN grupo ON grupos.id_grado = grupo.id WHERE grupos.id = (SELECT id_grupo FROM informacion_docente WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'")) as GrupoNombre FROM informacion_docente INNER JOIN materias ON materias.id = informacion_docente.id_materia WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'"';

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
  	public function getMatters(){

      $db = new Conexion();

      $consulta = 'SELECT materias.id, materias.nombre
        FROM materias
        INNER JOIN informacion_docente ON informacion_docente.id_materia = materias.id
        WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'" GROUP BY id';

      $results = $db->query($consulta);

      while ($fila = $db->consultaArreglo($results)) {

            $array[] = array(

              'id_matter' => $fila['id'],
              'name_matter' => $fila['nombre']

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
    public function getGrades($id_matter){

      $db = new Conexion();

      $consulta = 'SELECT grupos.id, grado.id, grado.nombre, grupo.id, grupo.nombre
				FROM grupos
        INNER JOIN grado ON grupos.id_grado = grado.id
				INNER JOIN grupo ON grupos.id_grupo = grupo.id
				INNER JOIN informacion_docente ON grupos.id = informacion_docente.id_grupo
				WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'"
				AND informacion_docente.id_materia = "'.$id_matter.'"';

      $results = $db->query($consulta);

      while ($fila = $db->consultaArreglo($results)) {

            $teacher_groups[] = array(
              'id_groups' => $fila[0],
              'id_grade' => $fila[1],
              'name_grade' => $fila[2],
              'id_group' => $fila[3],
              'name_group' => $fila[4]
            );
      }

      return $teacher_groups;

      $db->close();

    }

    public function getGroups($id_matter){

      $db = new Conexion();

      $consulta = 'SELECT grupos.id, grado.id, grado.nombre, grupo.id, grupo.nombre, sedes.id, sedes.nombre
				FROM grupos
      	INNER JOIN grado ON grupos.id_grado = grado.id
				INNER JOIN grupo ON grupos.id_grupo = grupo.id
				INNER JOIN sedes ON grupos.id_sede = sedes.id
				INNER JOIN informacion_docente ON informacion_docente.id_grupo = grupos.id
				WHERE informacion_docente.id_docente  = "'.$_SESSION['id'].'"
				and informacion_docente.id_materia = "'.$id_matter.'" ';

      $results = $db->query($consulta);

      while ($fila = $db->consultaArreglo($results)) {

            $teacher_groups[] = array(
              'id_groups' => $fila[0],
              'id_grade' => $fila[1],
              'name_grade' => $fila[2],
              'id_group' => $fila[3],
              'name_group' => $fila[4],
              'id_sede' => $fila[5],
              'name_sede' => $fila[6]
            );
      }

      return $teacher_groups;

      $db->close();

    }
		/**
		 * [getGradoDesc description]
		 * @return [type] [description]
		 */
		public function getGradoDesc(){
			$db = new Conexion();

			$query = 'SELECT grado.id, grado.nombre 
			FROM grupos 
			INNER JOIN grado ON grupos.id_grado = grado.id 
			INNER JOIN informacion_docente ON informacion_docente.id_grupo = grupos.id
      WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'"
			GROUP BY grado.id';

			$results = $db->query($query);

			while($x = $db->consultaArreglo($results)){
				$gradoDesc[] = array(
					'id_grade' => $x['id'],
					'name_grade' => $x['nombre']
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
			FROM grupo 
			INNER JOIN grupos ON grupos.id_grupo = grupo.id 
			INNER JOIN informacion_docente ON informacion_docente.id_grupo = grupos.id
      WHERE informacion_docente.id_docente = "'.$_SESSION['id'].'"
				GROUP BY grupo.id';

			$results = $db->query($query);

			while($x = $db->consultaArreglo($results)){
				$grupoDesc[] = array(
					'id_group' => $x['id'],
					'name_group' => $x['nombre']
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
				FROM informacion_docente
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
		   WHERE id_docente="'.$_SESSION['id'].'" 
		   and id_materia= "'.$id_materia.'" 
		   and id_periodo="'.$_SESSION['id_periodo'].'"';

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

	public function getIndicatorsForNotes($id_grade, $id_matter, $id_group){
		$db = new Conexion();

		$consulta = 'SELECT indicadores.id, indicadores.nombre
		   FROM indicadores
		   WHERE id_docente="'.$_SESSION['id'].'" 
		   AND id_materia= "'.$id_matter.'" 
			 AND id_grado= "'.$id_grade.'"
			 AND id_grupo = "'.$id_group.'"
		   AND id_periodo="'.$_SESSION['id_periodo'].'"';

		$res = $db->query($consulta);

		  while($f = $db->consultaArreglo($res)) {

		    $indicators[] = array(
				'id_indicator' => $f['id'],
				'name_indicator' => $f['nombre'],
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
    public function add_indicador($new_indicador, $id_grade, $id_group, $id_matter){

    $db = new Conexion();

		$sql = 'SELECT * FROM indicadores 
		WHERE nombre = "'.$new_indicador.'" AND id_docente = "'.$_SESSION['id'].'" AND id_periodo = "'.$_SESSION['id_periodo'].'" AND id_materia = "'.$id_matter.'" LIMIT 1';

		$results = $db->query($sql);

		if($db->rows($results) > 0){
			echo 3;
		}else{
			$db->query('INSERT INTO indicadores (nombre, id_docente, id_grado, id_grupo, id_materia, id_periodo) VALUES ("'.$new_indicador.'", "'.$_SESSION['id'].'", "'.$id_grade.'", "'.$id_group.'", "'.$id_matter.'", "'.$_SESSION['id_periodo'].'")');
			echo 4;
		}

		$db->close();
		}
		/**
		 * [sendIndicatorToRepository description]
		 * @param  [type] $indicator_name   [description]
		 * @param  [type] $author  				[description]
		 * @param  [type] $matter  				[description]
		 * @param  [type] $garde   				[description]
		 * @param  [type] $period  				[description]
		 * @param  [type] $year   				[description]
		 * @return [type]                 [description]
		 */
		public function sendIndicatorToRepository($indicator_name, $matter, $grade){
			$db = new Conexion();

			$sql = $db->query('SELECT id FROM reposiotorio_indicadores WHERE 
			nombre = "'.$indicator_name.'" AND autor = "'.$author.'"
			AND grado = "'.$grade.'" AND asingatura = "'.$matter.'"
			AND periodo = "'.$_SESSION['id_periodo'].'" AND ano = "'.YEAR.'"');

			$result = $db->rows($sql);

			if($result > 0){
				echo 3;
			}else{
				$db->query('INSERT INTO repositorio_indicadores (nombre, autor, asignatura, grado, periodo, ano) VALUES 
				("'.$indicator_name.'", "'.$_SESSION['nombre_completo'].'", "'.$matter.'", "'.$grade.'", "'.$_SESSION['id_periodo'].'", "'.YEAR.'")');

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
		public function getNotes($id_matter, $id_group ){
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
		public function putListNotes($id_activity, $id_matter, $id_group, $id_students, $notes){
			$db = new Conexion();

			for ($i=0; $i < sizeof($notes); $i++) { 


				for ($i=0; $i < sizeof($id_students); $i++) { 
					
					$sql = $db->query('SELECT * FROM notas WHERE 
					id_actividad = "'.$id_activity.'"" AND valoracion = "'.$notes[$i].'"
					AND id_grupo = "'.$id_group.'" AND id_materia = "'.$id_matter.'"
					AND id_estudiante = "'.$id_students[$i].'" ');

					$verify_note = $db->rows($sql);k

					if($verify_note > 0){
						echo 3; 
						exit();
					}

					$db->query('INSERT INTO notas (id_actividad, id_materia, id_grupo, id_estudiante, valoracion) 
					VALUES 
					("'.$id_activity.'", "'.$id_matter.'", "'.$id_group.'", "'.$id_students[$i].'", "'.$notes[$i].'")');
 				}
			}

			echo 4;

			$db->close();
		}

		public function putUnicNote($id_activity, $id_matter, $id_group, $id_student, $note){
			$db = new Conexion();


				$sql = $db->query('SELECT * FROM notas WHERE 
				id_actividad = '.$id_activity.' AND valoracion = '.$note.'
				AND id_grupo = '.$id_group.' AND id_materia = '.$id_matter.'
				AND id_estudiante = '.$id_student.'');

				$verify_note = $db->rows($sql);

				if($verify_note > 0){
					echo 3; 
					exit();
				}

				$db->query('INSERT INTO notas (id_actividad, id_grupo, id_materia, id_estudiante, valoracion)  
					VALUES 
					("'.$id_activity.'", "'.$id_matter.'", "'.$id_group.'", "'.$id_student.'", "'.$note.'")');

			echo 4;

			$db->close();
		}
		/**
		 * [editNotesList description]
		 * @param  [type] $notes [description]
		 * @return [type]        [description]
		 */
		public function editListNotes($notes){
			$db = new Conexion();

			foreach($notes as $note){
				$db->query('UPDATE notas SET nota = "'.$note['nota'].'"
				WHERE id =  "'.$note['id'].'"');
			}

			header('Location: notas');

			$db->close();
		}
		/**
		 * [editNote description]
		 * @param  [type] $note [description]
		 * @param  [type] $id   [description]
		 * @return [type]       [description]
		 */
		public function editUnicNote($note, $id){
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
		public function add_activity($title, $description, $type, $start_date, $end_date, $evaluate_date, $percentage, $id_indicator){
			$db = new Conexion();

			$sql = $db->query('SELECT * FROM actividades WHERE titulo = "'.$title.'" AND id_indicador = "'.$id_indicator.'" LIMIT 1');

			$exist = $db->verificarFila($sql);

			if($exist > 0){
					echo 3;
			}else{

				/** VERIFY TO THE PERCENTAJE THAT DON`T PASS THE 100% */

				$know_percentage = $db->query('SELECT sum(ponderacion) FROM actividades WHERE id_indicador = "'.$id_indicator.'"');

				$verify_percentage = $db->consultaArreglo($know_percentage);

				if($verify_percentage[0] > "100"){

					echo 4;

				} else {

					$db->query('INSERT INTO actividades (nombre, tipo, descripcion, fecha_asignacion, fecha_revision, fecha_final, ponderacion, id_docente, id_indicador) 
					VALUES ("'.$title.'", "'.$type.'", "'.$description.'", "'.$start_date.'", "'.$evaluate_date.'", "'.$end_date.'", "'.$percentage.'" , "'.$_SESSION['id'].'", "'.$id_indicator.'")');

					echo 5;
				}

	
			}

			$db->close();
		}
		/**
		 * [getActivitys description]
		 * @return [type] [description]
		 */
		public function getActivitys(){
			$db = new Conexion();

			$sql = 'SELECT actividades.id, actividades.nombre, actividades.tipo, actividades.descripcion, actividades.fecha_asignacion, actividades.fecha_revision, actividades.fecha_final, actividades.ponderacion, indicadores.nombre 
			FROM actividades
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
					'evaluate_date' => $f['fecha_revision'],
					'date_finish' => $f['fecha_final'],
					'percentage' => $f['ponderacion'],
					'name_indicator' => $f[6]
				);
			}

			return $activitys;

			$db->close();
		}

		public function getActivitysFromIndicatorId($id_indicator){

			$db = new Conexion();

			$sql = 'SELECT actividades.id, actividades.nombre, grado.id, grado.nombre, grupo.id, actividades.fecha_asignacion, actividades.fecha_revision, actividades.fecha_final, actividades.ponderacion,
			(SELECT id FROM grupos WHERE id_grupo = grupo.id AND id_grado = grado.id ) as GruposID
			FROM actividades
			INNER JOIN indicadores ON indicadores.id = actividades.id_indicador
			INNER JOIN grado ON grado.id = indicadores.id_grado
			INNER JOIN grupo ON grupo.id = indicadores.id_grupo
			WHERE actividades.id_docente = "'.$_SESSION['id'].'"
			AND actividades.id_indicador = "'.$id_indicator.'"';

			$results = $db->query($sql);

			while($f = $db->consultaArreglo($results)){
				$activitys[] = array(
					'id' => $f[0],
					'title' => $f[1],
					'name_grade' => $f[3],
					'id_group' => $f[4],
					'date_start' => $f['fecha_asignacion'],
					'evaluate_date' => $f['fecha_revision'],
					'date_finish' => $f['fecha_final'],
					'percentage' => $f['ponderacion'],
					'id_groups' => $f[9]
				);
			}

			return $activitys;

			$db->close();

		}

		public function getEvidenceForActivitys($id_activity){
			$db = new Conexion();

			$sql = $db->query('SELECT evidencias FROM actividades WHERE id = "'.$id_activity.'" ');

			return $db->consultaArreglo($sql);

			$db->close();
		}

		public function getActivitysForNotes($id_indicator){

			$db = new Conexion();

			$sql = 'SELECT actividades.id, actividades.nombre, actividades.tipo, actividades.descripcion, actividades.fecha_asignacion, actividades.fecha_revision, indicadores.nombre FROM actividades
			INNER JOIN indicadores ON indicadores.id = actividades.id_indicador
			WHERE actividades.id_docente = "'.$_SESSION['id'].'"
			AND actividades.id_indicador = "'.$id_indicator.'"';

			$results = $db->query($sql);

			while($f = $db->consultaArreglo($results)){
				$activitys_for_notes[] = array(
					'id' => $f['id'],
					'title' => $f[1],
					'type' => $f['tipo'],
					'description' => $f['descripcion'],
					'date_start' => $f['fecha_asignacion'],
					'date_finish' => $f['fecha_revision'],
					'name_indicator' => $f[6]
				);
			}

			return $activitys_for_notes;

			$db->close();

		}

		public function getActivityForNotes($id_activity){

			$db = new Conexion();

			$sql = 'SELECT actividades.id, actividades.nombre, actividades.tipo, actividades.descripcion, actividades.fecha_asignacion, actividades.fecha_revision, actividades.ponderacion FROM actividades
			WHERE actividades.id = "'.$id_activity.'"';

			$results = $db->query($sql);

			while($f = $db->consultaArreglo($results)){
				$activity_for_notes[] = array(
					'id' => $f['id'],
					'title' => $f[1],
					'type' => $f['tipo'],
					'description' => $f['descripcion'],
					'date_start' => $f['fecha_asignacion'],
					'date_finish' => $f['fecha_revision'],
					'percentage' => $f['ponderacion']
				);
			}

			return $activity_for_notes;

			$db->close();

		}

		public function getStudentsOfGroup($id_group){
			$db = new Conexion();

			$sql = 'SELECT * FROM estudiantes WHERE id_grupo = "'.$id_group.'"';

			$results = $db->query($sql);

			while($f = $db->consultaArreglo($results)){
				$students[] = array(
					'id' => $f['id'],
					'n' => $f['n'],
					'photo' => $f['foto'],
					'first_name' => $f['primer_nombre'],
					'second_name' => $f['segundo_nombre'],
					'first_lastname' => $f['primer_apellido'],
					'second_lastname' => $f['segundo_apellido']
				);
			}

			return $students;

			$db->close();
		} 

	}
?>
