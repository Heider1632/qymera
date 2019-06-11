<?php
	if(!isset($_SESSION['id'])):
		header('location:' .APP_URL.  'default/redirec/');
	else:
		/* specific function to call back template */
		if($_GET){
			require 'core/model/teacher.php';

			$teacher = new Teacher();
			/* var necesary to render template */
			$id_docente = $_SESSION['id'];
			$id_grado = $_GET['id_grado'];
			$id_grupo = $_GET['id_grupo'];
			$id_materia = $_GET['id_materia'];
			$id_periodo = $_SESSION['id_periodo'];

			/* data function */
			$descInf = ($teacher->descInformation($id_grado, $id_grupo, $id_materia));

			$idStudents = ($teacher->listIdStudents($id_grado, $id_grupo));

			/* students view */
				/* header */
				include 'html/overall/header.php';


				/* template students */
				include 'html/user/estudiantes.php';

				/* scripts*/
				include 'html/overall/scripts.php';


		}else{
			$_GET['view'] = '?view=error';
		}
endif;
?>
