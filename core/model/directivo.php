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
	 * [addSede description]
	 * @param [type] $name       [description]
	 * @param [type] $population [description]
	 * @param [type] $location   [description]
	 * @param [type] $agent      [description]
	 * @param [type] $contact    [description]
	 */
	public function addSede($name, $population, $location, $agent, $contact){
		$db = new Conexion();

		$sql = $db->query('SELECT id FROM sedes WHERE nombre = "'.$name.'" LIMIT 1');

		$verificar_sede = $db->rows($sql);

		if($verificar_sede > 0){
			echo 3;
		}else{
			$db->query('INSERT INTO sedes (nombre, poblacion, localidad, representante, contacto) VALUES("'.$name.'", "'.$population.'", "'.$location.'", "'.$agent.'", "'.$contact.'")');

			echo 4;
		}

		$db->close();
	}
	/**
	 * [getSedes description]
	 * @return [type] [description]
	 */
	public function getSedes(){
		$db = new Conexion();

		$sql = $db->query('SELECT id, nombre, poblacion, localidad FROM sedes');

		while($x = $db->consultaArreglo($sql)){
			$array_sedes[] = array(
				'id' => $x['id'],
				'name' => $x['nombre'],
				'population' => $x['poblacion'],
				'location' => $x['localidad']
			);
		}

		return $array_sedes;

		$db->close();
	}
	/**
	 * [getPrimarySedes description]
	 * @return [type] [description]
	 */
	public function getPrimarySedes(){
		$db = new Conexion();

		$sql = $db->query('SELECT id, nombre, poblacion, localidad FROM sedes WHERE nombre != "principal"');

		while($x = $db->consultaArreglo($sql)){
			$array_primary_sedes[] = array(
				'id' => $x['id'],
				'name' => $x['nombre'],
				'population' => $x['poblacion'],
				'location' => $x['localidad']
			);
		}

		return $array_primary_sedes;

		$db->close();

	}
	/**
	 * [getBalechorSedes description]
	 * @return [type] [description]
	 */
	public function getBalechorSedes(){
		$db = new Conexion();

		$sql = $db->query('SELECT id, nombre, poblacion, localidad FROM sedes WHERE nombre = "principal"');

		while($x = $db->consultaArreglo($sql)){
			$array_balechor_sedes[] = array(
				'id' => $x['id'],
				'name' => $x['nombre'],
				'population' => $x['poblacion'],
				'location' => $x['localidad']
			);
		}

		return $array_balechor_sedes;

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
			echo 3;
		}else{
			$db->query('INSERT INTO grado SET nombre = "'.$name.'"');
			echo 4;
		}

		$db->close();
	}
	/**
	 * [getGrades description]
	 * @return [type] [description]
	 */
	public function getGrades(){
		$db = new Conexion();

		$sql = $db->query('SELECT * FROM grado');

		while ($f = $db->consultaArreglo($sql)) {
			$array_grades[] = array(
				'id' => $f['id'],
				'name' => $f['nombre']
			);
		}

		return $array_grades;

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
				'name' => $f['nombre']
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
				'name' => $f['nombre']
			);
		}

		return $balechor_grades;

		$db->close();
	}
	/**
	 * [getAsyncGroups description]
	 * @return [type] [description]
	 */
	public function getAsyncGroups(){
		$db = new Conexion();

		$sql = $db->query('SELECT * FROM grupo');

		while ($f = $db->consultaArreglo($sql)) {
			$array_grupos[] = array(
				'id' => $f['id'],
				'name' => $f['nombre']
			);
		}

		return $array_grupos;

		$db->close();

	}
	/**
	 * [getGroups description]
	 * @return [type] [description]
	 */
	public function getPrimaryGroups(){
		$db = new Conexion();

		$sql = $db->query('SELECT grupos.id, grado.nombre, grupo.nombre, sedes.nombre FROM grupos 
		INNER JOIN grado ON grado.id = grupos.id_grado 
		INNER JOIN grupo ON grupo.id = grupos.id_grupo 
		INNER JOIN sedes ON sedes.id = grupos.id_sede
		WHERE grado.nombre <= 5');

		while($f = $db->consultaArreglo($sql)){
			$array_primary[] = array(
				'id_group' => $f[0],
				'name_grade' => $f[1],
				'name_group' => $f[2],
				'name_sede' => $f[3]
			);
		}

		return $array_primary;

		$db->close();
	}

	/**
	 * [getPrimaryGroupsBySedeId]
	 * @return [type] [description]
	 */
	public function getPrimaryGroupsBySedeId($id){
		$db = new Conexion();

		$sql = $db->query('SELECT grupos.id, grado.nombre, grupo.nombre FROM grupos 
		INNER JOIN grado ON grado.id = grupos.id_grado 
		INNER JOIN grupo ON grupo.id = grupos.id_grupo 
		WHERE grado.nombre <= 5
		AND grupos.id_sede = (SELECT id FROM sedes WHERE id = "'.$id.'")');

		while($f = $db->consultaArreglo($sql)){
			$array_primary_by_sede[] = array(
				'id_group' => $f[0],
				'name_grade' => $f[1],
				'name_group' => $f[2],
			);
		}

		return $array_primary_by_sede;

		$db->close();
	}

	/**
	 * [getBalechorGroupsBySedeId]
	 * @return [type] [description]
	 */
	public function getBalechorGroupsBySedeId($id){
		$db = new Conexion();

		$sql = $db->query('SELECT grupos.id, grado.nombre, grupo.nombre FROM grupos 
		INNER JOIN grado ON grado.id = grupos.id_grado 
		INNER JOIN grupo ON grupo.id = grupos.id_grupo 
		WHERE grado.nombre > 5
		AND grupos.id_sede = (SELECT id FROM sedes WHERE id = "'.$id.'")');

		while($f = $db->consultaArreglo($sql)){
			$array_balechor_by_sede[] = array(
				'id_group' => $f[0],
				'name_grade' => $f[1],
				'name_group' => $f[2],
			);
		}

		return $array_balechor_by_sede;

		$db->close();
	}
	/**
	 * [getBalechorGroups description]
	 * @return [type] [description]
	 */
	public function getBalechorGroups(){
		$db = new Conexion();

		$sql = $db->query('SELECT grupos.id, grado.nombre, grupo.id, grupo.nombre, sedes.nombre FROM grupos 
		INNER JOIN grado ON grado.id = grupos.id_grado 
		INNER JOIN grupo ON grupo.id = grupos.id_grupo 
		INNER JOIN sedes ON sedes.id = grupos.id_sede
		WHERE grado.nombre > 5');

		while($f = $db->consultaArreglo($sql)){
			$array_balechor[] = array(
				'id_group' => $f[0],
				'name_grade' => $f[1],
				'id_g' => $f[2],
				'name_group' => $f[3],
				'name_sede' => $f[4]
			);
		}
		return $array_balechor;

		$db->close();
	}
	/**
	 * [find_groups] description
	 * @return [Type] description
	 */
	public function find_group($id_group){
		$db = new Conexion();

		$sql = $db->query('SELECT grupos.id, grado.nombre, grupo.id FROM grupos 
		INNER JOIN grados ON grupos.id_grado = grado.id
		INNER JOIN grupo ON grupos.id_grupo = grupo.id
		WHERE grupo.id = "'.$id_group.'"');

		while($f = $db->consultaArreglo($sql)){
			$group[] = array(
				'id' => $f['id'],
				'name_grade' => $f[2],
				'name_group' => $f[3]
			);
		}

		return $group;

		$db->close();
	}

	public function find_students_for_group($id_group){
		$db = new Conexion();

		$sql = $db->query('SELECT id, n, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido
		FROM estudiantes
		WHERE id_grupo = "'.$id_group.'"');

		while($f = $db->consultaArreglo($sql)){
			$list_students[] = array(
				'id' => $x['id'],
				'n' => $f['n'],
				'first_name' => $f['primer_nombre'],
				'second_name' => $f['segundo_nombre'],
				'first_lastname' => $f['primer_apellido'],
				'second_lastname' => $f['segundo_apellido'],
			);
		}

		return $list_students;

		$db->close();
	}
	/**
	 * [addGroup description]
	 * @param [type] $id_grade [description]
	 * @param [type] $id_group [description]
	 * @param [type] $code     [description]
	 */
	public function addGroup($id_grade, $id_group, $code, $id_sede){
		$db = new Conexion();

		$sql = 'SELECT codigo FROM grado_grupo WHERE id_grado = "'.$id_grade.'" AND id_grupo = "'.$id_group.'" AND id_sede = "'.$id_sede.'"';

		$result = $db->query($sql);

		$verificar_grupo = $db->rows($result);

		if($verificar_grupo > 0){

			echo 2;

		}else{
			
			$db->query('INSERT INTO grado_grupo (id_grado, id_grupo, codigo, id_sede) VALUES ("'.$id_grade.'", "'.$id_group.'", "'.$code.'", "'.$id_sede.'")');

			echo 3;
		}

		$db->close();
	}
	/**
	 * [getGroups description]
	 * @return [type] [description]
	 */
	public function getGroups(){
		$db = new Conexion();

		$sql = $db->query('SELECT grado.nombre, grupo.nombre, sedes.nombre, codigo FROM grado_grupo
			INNER JOIN grado ON grado_grupo.id_grado = grado.id
			INNER JOIN grupo ON grado_grupo.id_grupo = grupo.id
			INNER JOIN sedes ON grado_grupo.id_sede = sedes.id');

		while($f = $db->consultaArreglo($sql)){
			$array_groups[] = array(
				'code' => $f['codigo'],
				'nombre_grade' => $f[0],
				'nombre_group' => $f[1],
				'nombre_sede' => $f[2]

			);
		}

		return $array_groups;


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
	public function addTeacher($first_name, $second_name, $first_lastname, $second_lastname, $email, $password, $type){
		$db = new Conexion();

		$photo = 'null';

		$password = md5($password);

		$sql = 'SELECT id FROM docentes WHERE primer_nombre = "'.$first_name.'" AND primer_apellido = "'.$first_lastname.'"';

		$result = $db->query($sql);

		$verificar_teacher = $db->rows($result);

		if($verificar_teacher > 0){
			echo 3;
		}else{
			$db->query('INSERT INTO docentes (primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, foto,  tipo) 
				VALUES("'.$first_name.'", "'.$second_name.'", "'.$first_lastname.'", "'.$second_lastname.'",
				 "'.$photo.'", "'.$type.'")');

			$db->query('INSERT INTO usuario (correo, clave ,token) 
				VALUES ("'.$email.'", "'.$password.'", "'.md5(time()).'")');

			echo 4;
		}

		$db->close();
	}
	/**
	 * [getTeachers description]
	 * @return [type] [description]
	 */
	public function getTeachers(){

		$db = new Conexion();

		$sql = $db->query('SELECT id, primer_nombre, primer_apellido FROM docentes ');

		while ($f = $db->consultaArreglo($sql)) {
			$array_teachers[] = array(
				'id' => $f['id'],
				'first_name' => $f['primer_nombre'],
				'first_lastname' => $f['primer_apellido']
			);
		}

		return $array_teachers;

		$db->close();

	}
	/**
	 * [getPrimaryTeachers description]
	 * @return [type] [description]
	 */
	public function getPrimaryTeachers(){

		$db = new Conexion();

		$sql = $db->query('SELECT id, primer_nombre, primer_apellido FROM docentes 
			WHERE tipo = "primaria"');

		while ($f = $db->consultaArreglo($sql)) {
			$array_teachers[] = array(
				'id' => $f['id'],
				'first_name' => $f['primer_nombre'],
				'first_lastname' => $f['primer_apellido']
			);
		}

		return $array_teachers;

		$db->close();

	}
	/**
	 * [getBalechorsTeachers description]
	 * @return [type] [description]
	 */
	public function getBalechorTeachers(){

		$db = new Conexion();

		$sql = $db->query('SELECT id, primer_nombre, primer_apellido FROM docentes 
			WHERE tipo = "bachillerato"');

		while ($f = $db->consultaArreglo($sql)) {
			$array_teachers[] = array(
				'id' => $f['id'],
				'first_name' => $f['primer_nombre'],
				'first_lastname' => $f['primer_apellido']
			);
		}

		return $array_teachers;

		$db->close();

	}

	/**
	 * [addMatter description]
	 * @param [type] $name [description]
	 */
	public function addMatter($name){
		$db = new Conexion();

		$sql= $db->query('SELECT * FROM materias WHERE nombre = "'.$name.'"');

		$verificar_matter = $db->rows($sql);

		if($verificar_matter > 0){
			echo 3;
		}else{
			$db->query(' INSERT INTO materias (nombre) VALUES ("'.$name.'")');

			echo 4;
		}

		$db->close();
	}
	/**	
	 * [getMatters description]
	 * @return [type] [description]
	 */
	public function getMatters(){
		$db = new Conexion();

		$sql = $db->query('SELECT * FROM materias');

		while ($f = $db->consultaArreglo($sql)) {
			$array_matters[] = array(
				'id' => $f['id'],
				'name' => $f['nombre']
			);
		}

		return $array_matters;

		$db->close();
	}
	/**
	 * [asign_teacher description]
	 * @param  [type] $id_teacher [description]
	 * @param  [type] $id_matter  [description]
	 * @param  [type] $id_grade   [description]
	 * @param  [type] $id_group   [description]
	 * @param  [type] $id_sede    [description]
	 * @return [type]             [description]
	 */
	public function asign_teacher($id_teacher, $id_matter, $id_grade, $id_group, $id_sede){
		$db = new Conexion();

		$sql = $db->query('SELECT * FROM informacion_docente
		 WHERE id_docente = "'.$id_teacher.'" AND id_materia = "'.$id_matter.'" AND id_grado = "'.$id_grade.'"
		 AND id_grupo = "'.$id_group.'" AND id_sede = "'.$id_sede.'"');

		$verificar_assign = $db->rows($sql);

		if($verificar_assign > 0){
			echo 2;
		}else{
			$db->query('INSERT INTO informacion_docente (id_docente, id_materia, id_grado, id_grupo, id_sede) 
				VALUES ("'.$id_teacher.'", "'.$id_matter.'", "'.$id_grade.'", "'.$id_group.'", "'.$id_sede.'")');

			echo 3;
		}

		$db->close();
	}
	/**
	 * [getInformationTeacher description]
	 * @return [type] [description]
	 */
	public function getInformationTeacher(){
		$db = new Conexion();

		$sql = $db->query('SELECT materias.nombre, docentes.primer_nombre, docentes.primer_apellido, grado.nombre, grupo.nombre, sedes.nombre FROM informacion_docente INNER JOIN materias ON materias.id =informacion_docente.id_materia INNER JOIN docentes ON docentes.id = informacion_docente.id_docente INNER JOIN grado ON grado.id = informacion_docente.id_grado INNER JOIN grupo ON grupo.id = informacion_docente.id_grupo INNER JOIN sedes ON sedes.id = informacion_docente.id_sede');

		while ($f = $db->consultaArreglo($sql)) {
			$array_information[] = array(
				'name_matter' => $f[0],
				'first_name' => $f[1],
				'first_lastname' => $f[2],
				'name_grade' => $f[3],
				'name_group' => $f[4],
				'name_sede' => $f[5]
			);
		}

		return $array_information;


		$db->close();
	}
	/**
	 * [finishConfig description]
	 * @return [type] [description]
	 */
	public function finishConfig(){
		$db = new Conexion();

		$db->query('UPDATE usuario SET  estado = "1" WHERE id = "'.$_SESSION['id'].'" ');

		echo 2;

		$db->close();
	}
	/**
	 * [reset description]
	 * @return [type] [description]
	 */
	public function reset(){
		$db = new Conexion();

		$db->query("DELETE * from usuario WHERE id < 5");

		$db->query("TRUNCATE TABLE docentes");

		$db->query("TRUNCATE TABLE grado");

		$db->query("TRUNCATE TABLE grado_grupo");

		$db->query("TRUNCATE TABLE materias");

		$db->query("TRUNCATE TABLE informacion_docente");

		$db->query('UPDATE usuario SET  estado = "0" WHERE id = "'.$_SESSION['id'].'" ');

		echo 2;

		$db->close();
	}

	/**
	 * [getCountTeachers description]
	 * @return [type] [description]
	 */
	public function getCountTeachers(){

		$db = new Conexion();

		$sql = $db->query("SELECT count(id) FROM docentes");

		$num_teachers = $db->consultaArreglo($sql);

		return $num_teachers;

		$db->close();

	}

	/**
	 * [getCountDirectorGroups description]
	 * @return [type] [description]
	 */
	public function getCountDirectorGroups(){

		$db = new Conexion();

		$sql = $db->query("SELECT count(id) FROM docentes WHERE director_grupo = 1");

		$num_director_groups = $db->consultaArreglo($sql);

		return $num_director_groups;

		$db->close();

	}
	/**
	 * [getDirectorGroups description]
	 * @return [type] [description]
	 */
	public function getDirectorGroups(){

		$db = new Conexion();

		$sql = $db->query("SELECT id, foto, primer_nombre, primer_apellido FROM docentes WHERE director_grupo = 1");

		while ($f = $db->consultaArreglo($sql)) {
			$director_groups[] = array(
				'id' => $f['id'],
				'first_name' => $f['primer_nombre'],
				'first_lastname' => $f['primer_apellido'],
				'photo' => $f['foto'],
			);
		}

		return $director_groups;

		$db->close();

	}
	/**
	 * [AddDirectorGroups description]
	 */
	public function AddBalechorDirectorGroup($id_teacher, $id_group){

		$db = new Conexion();

		$sql = $db->query('SELECT id FROM director_grupo WHERE id_docente = "'.$id_teacher.'"');

		$result = $db->rows($sql);

		if($result > 0){
			echo 3;
		}else{

			$db->query('INSERT INTO director_grupo (id_docente, id_grupo) 
			VALUES ("'.$id_teacher.'", "'.$id_group.'")');

			echo 4;

		}

		$db->close();

	}

	/**
	 * [AddDirectorGroups description]
	 */
	public function AddPrimaryDirectorGroup($id_teacher, $id_group){

		$db = new Conexion();

		$sql = $db->query('SELECT id_teacher FROM director_grupo 
		WHERE id_docente = "'.$id_teacher.'" AND id_grupo = "'.$id_group.'"');

		$result = $db->rows($sql);

		if($result > 0){
			echo 3;
		}else{

			$db->query('INSERT INTO director_grupo (id_docente, id_grupo) 
			VALUES ("'.$id_teacher.'", "'.$id_group.'")');

			echo 4;

		}

		$db->close();

	}

	/**
	 * [editDirectorGroup description]
	 */
	public function editDirectorGroup($id_teacher, $id_group){

		$db = new Conexion();

		$sql = $db->query('UPDATE director_grupo 
			SET id_docente = "'.$id_teacher.'", id_grupo = "'.$id_group.'" 
			WHERE id_docente = "'.$id_teacher.'" AND id_grupo = "'.$id_group.'"');

		echo 3;

		$db->close();

	}

	/**
	 * [DeleteDirectorGroup description]
	 */
	public function DeleteDirectorGroup($id_teacher, $id_group){

		$db = new Conexion();

		$db->query('DELETE FROM director_grupo 
			WHERE id_docente = "'.$id_teacher.'" AND id_grupo = "'.$id_group.'"');

		echo 3;

		$db->close();

	}
	/**	
	 * [getDirectivoGroupById Description]
	 */
	public function getDirectivoGroupById($id){
		$db = new Conexion();

		$sql = $db->query('SELECT docentes.primer_nombre, docentes.primer_apellido, 
		(SELECT grado.nombre FROM grado WHERE grado.id = grado_grupo.id_grado) as GradoName,
		(SELECT grupo.nombre FROM grupo WHERE grupo.id = grado_grupo.id_grupo) as GrupoName,
		(SELECT sedes.nombre FROM sedes WHERE sedes.id = grado_grupo.id_sede) as SedeName 
		FROM director_grupo 
		INNER JOIN docentes ON docentes.id = director_grupo.id_docente 
		INNER JOIN grado_grupo ON director_grupo.id_grupo = grado_grupo.codigo
		WHERE director_grupo.id_docente = "'.$id.'"');

		$director_group = $db->consultaArreglo($sql);

		return $director_group;

		$db->close();
	}
	/**
	 * [addStudent Description]
	 */
	public function addStudent($first_name, $second_name, $first_lastname, $second_lastname, $id_group){

		$db = new Conexion();
		
		$sql = $db->query('SELECT id FROM estudiantes WHERE 
		primer_nombe = "'.$first_name.'" AND
		primer_apellido = "'.$first_lastname.'" AND 
		segundo_apelldio = "'.$second_lastname.'"');

		$result = $db->rows($sql);

		if($result > 0){
			echo 3;
		}else{
			$find_max_registrer = $db->query('SELECT MAX(n) FROM estudiantes WHERE id_grupo = "'.$id_group.'"');

			$array_max_registrer = $db->consultaArreglo($find_max_registrer);

			if(empty($array_max_registrer[0])){
				$db->query('INSERT INTO estudiantes (n, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, id_grupo)
				VALUES("1", "'.$first_name.'", "'.$second_name.'", "'.$first_lastname.'", "'.$second_lastname.'", "'.$id_group.'")');

			}else{

				$num = array_map(create_function('$value', 'return (int)$value;'), $array_max_registrer);

				$value = $num[0];

				$n = $value + 1;

				$db->query('INSERT INTO estudiantes (n, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido, id_grupo)
				VALUES("'.$n.'", "'.$first_name.'", "'.$second_name.'", "'.$first_lastname.'", "'.$second_lastname.'", "'.$id_group.'")');
			}
			
			echo 4;
		}

		$db->close();

	}
	/**
	* addCharge
	* @return [decsription]
	*/
	public function addCharge($id_teacher, $id_matter, $id_group){
		$db = new Conexion();

		$sql = $db->query('SELECT * FROM informacion_docente 
		WHERE id_docente = "'.$id_teacher.'"
		AND id_materia = "'.$id_matter.'" 
		AND id_grupo = "'.$id_group.'" ');

		$result = $db->rows($sql);

		if($result > 0){
			echo 3;
		}else{
			$db->query('INSERT INTO informacion_docente (id_docente, id_materia, id_grupo)
			VALUES("'.$id_teacher.'", "'.$id_matter.'", "'.$id_group.'")');
			echo 4;
		}

		$db->close();
	}

	public function getPrimaryCharges(){

		$db = new Conexion();

		$sql = $db->query("SELECT materias.nombre, docentes.primer_nombre, docentes.primer_apellido, grado.nombre, grupo.nombre, sedes.nombre FROM informacion_docente INNER JOIN grupos ON grupos.id = informacion_docente.id_grupo INNER JOIN materias ON materias.id =informacion_docente.id_materia INNER JOIN docentes ON docentes.id = informacion_docente.id_docente INNER JOIN grado ON grado.id = grupos.id_grado INNER JOIN grupo ON grupo.id = grupos.id_grupo INNER JOIN sedes ON sedes.id = grupos.id_sede
		WHERE grado.id <= 5");

		while ($f = $db->consultaArreglo($sql)) {
			$primary_charges[] = array(
				'first_name' => $f['primer_nombre'],
				'first_lastname' => $f['primer_apellido'],
				'name_matter' => $f[0],
				'name_grade' => $f[3],
				'name_group' => $f[4],
				'name_sede' => $f[5]
			);
		}

		return $primary_charges;

		$db->close();

	}

	public function getBalechorCharges(){
		$db = new Conexion();

		$sql = $db->query("SELECT materias.nombre, docentes.primer_nombre, docentes.primer_apellido, grado.nombre, grupo.id, sedes.nombre FROM informacion_docente INNER JOIN grupos ON grupos.id = informacion_docente.id_grupo INNER JOIN materias ON materias.id =informacion_docente.id_materia INNER JOIN docentes ON docentes.id = informacion_docente.id_docente INNER JOIN grado ON grado.id = grupos.id_grado INNER JOIN grupo ON grupo.id = grupos.id_grupo INNER JOIN sedes ON sedes.id = grupos.id_sede
		WHERE grado.id > 5");

		while ($f = $db->consultaArreglo($sql)) {
			$balechor_charges[] = array(
				'first_name' => $f['primer_nombre'],
				'first_lastname' => $f['primer_apellido'],
				'name_matter' => $f[0],
				'name_grade' => $f[3],
				'name_group' => $f[4],
				'name_sede' => $f[5]
			);
		}

		return $balechor_charges;

		$db->close();
	}

	public function getIndicatorsToRepository(){
		$db = new Conexion();

		$sql = $db->query('SELECT * FROM repositorio_indicadores');

		while ($f = $db->consultaArreglo($sql)) {
			$repo_indicators[] = array(
				'name' => $f['nombre'],
				'author' => $f['autor'],
				'matter' => $f['asignatura'],
				'grade' => $f['grado'],
				'period' => $f['periodo'],
				'year' => $f['ano']
			);
		}

		return $repo_indicators;

		$db->close();
	}

	public function addIndicatorToRepository($indicator, $author, $matter, $period, $grade){
		$db = new Conexion();

		$sql = $db->query('SELECT id FROM repositorio_indicadores
		WHERE author = "'.$author.'"
		AND nombre = "'.$indicator.'" 
		AND asignatura = "'.$matter.'" 
		AND periodo = "'.$period.'" 
		AND grado = "'.$grade.'" ');

		$result = $db->rows($sql);

		if($result > 0){
			echo 3;
		}else{
			$db->query('INSERT INTO repositorio_indicadores (nombre, autor, asignatura, periodo, grado)
			VALUES("'.$indicator.'", "'.$author.'", "'.$matter.'", "'.$period.'", "'.$grade.'")');
			echo 4;
		}

		$db->close();
	}

	}
?>
