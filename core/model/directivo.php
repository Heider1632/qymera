<?php
	require_once('conexion.php');
	/**
	 * [Directivo description]
	 */
	class Directivo{
	/**
	 * [verify description]
	 * @return [type] [description]
	 */
	public function verify(){
		$db = new Conexion();

		$sql = $db->query('SELECT estado FROM usuario WHERE id = "'.$_SESSION['id'].'" LIMIT 1');

		$result = $db->consultaArreglo($sql);

		return $result;

		$db->close();
	}
	/**
	 * [addGrade description]
	 * @param [type] $name [description]
	 */
	public function addGrade($name){
		$db = new Conexion();

		$sql = $db->query('SELECT id FROM grado WHERE nombre = "'.$name.'" LIMIT 1');

		$file = $db->verificarFila($sql);

		if($file > 0){
			echo 2;
		}else{
			$db->query('INSERT INTO grado SET nombre = "'.$name.'"');
			echo 3;
		}

		$db->close();
	}
	/**
	 * [getGrades description]
	 * @return [type] [description]
	 */
	public function getPrimaryGrades(){
		$db = new Conexion();

		$sql = $db->query('SELECT * FROM grado WHERE nombre <= 5');

		while ($f = $db->consultaArreglo($sql)) {
			$primary_grades[] = array(
				'id' => $f['id'],
				'nombre' => $f['nombre']
			);
		}

		return $primary_grades;

		$db->close();
	}
	/**
	 * [getBalechorGrades description]
	 * @return [type] [description]
	 */
	public function getBalechorGrades(){
		$db = new Conexion();

		$sql = $db->query('SELECT * FROM grado WHERE nombre > 5');

		while ($f = $db->consultaArreglo($sql)) {
			$balechor_grades[] = array(
				'id' => $f['id'],
				'nombre' => $f['nombre']
			);
		}

		return $balechor_grades;

		$db->close();
	}
	/**
	 * [getGroups description]
	 * @return [type] [description]
	 */
	public function getGroups(){
		$db = new Conexion();

		$sql = $db->query('SELECT grado.nombre, grupo.nombre FROM grado_grupo INNER JOIN grado ON grado.id = grado_grupo.id_grado INNER JOIN grupo ON grupo.id = grado_grupo.id_grupo');

		$result = $db->consultaArreglo($sql);

		return $result;

		$db->close();
	}
	/**
	 * [add_teacher description]
	 * @param [type] $name           [description]
	 * @param [type] $lastname       [description]
	 * @param [type] $group_director [description]
	 * @param [type] $id_grade       [description]
	 * @param [type] $id_group       [description]
	 */
	public function add_teacher($name, $lastname, $group_director, $id_grade, $id_group){
		$db = new Conexion();

		$db->close();
	}


	public function add_materia($name){
		$db = new Conexion();

		$db->close();
	}

	public function edit_materia($id_matter, $new_name){
		$db = new Conexion();

		$db->close();
	}

	public function asign_teacher($id_teacher, $id_matter, $id_grade, $id_group){
		$db = new Conexion();

		$db->close();
	}

	public function edit_asign_teacher($id_teacher, $id_matter, $id_grade, $id_group){
		$db = new Conexion();

		$db->close();
	}

	public function asign_cicle($start_date, $end_date){
		$db = new Conexion();

		$db->close();
	}

	public function asign_period($start_period, $end_period, $name){
		$db = new Conexion();

		$db->close();
	}

	}
?>
