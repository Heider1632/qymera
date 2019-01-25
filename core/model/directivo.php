<?php
	require_once('conexion.php');
	/**
	 * [Directivo description]
	 */
	class Directivo{
	public function verify(){
		$db = new Conexion();

		$sql = $db->query('SELECT estado FROM usuario WHERE id = "'.$_SESSION['id'].'" LIMIT 1');

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

	public function del_teacher($id_teacher){
		$db = new Conexion();

		$db->close();
	}

	public function add_materia($name){
		$db = new Conexion();

		$db->close();
	}

	public function del_materia($id_matter){
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
