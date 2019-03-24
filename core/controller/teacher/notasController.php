<?php
	if(!isset($_SESSION['id'])):
		header('location:' .APP_URL.  'default/redirec/');
	else:
	/*  schema that allow callback the functions */
			require 'core/model/coexistence.php';
			require 'core/model/teacher.php';

			$coexistence = new Coexistence();
			$teacher = new Teacher();

		$materias = ($teacher->getMateria());

		$action = isset($_GET['action']) ? $_GET['action'] : 'viewPreview';

		switch ($action) {
			case 'add':
			if($_GET){
				$id_grado = urldecode($_GET['id_grado']);
				$id_grupo = urldecode($_GET['id_grupo']);

				$estudiantes_id = ($teacher->listIdStudents($id_grado, $id_grupo));
			}

			$id_docente = $_SESSION['id'];
			$id_materia = $_POST['id_materia'];
			$id_periodo = $_SESSION['id_periodo'];

			$indicadores = ($teacher->getIndicadores($id_docente, $id_materia, $id_periodo));

			//array notes empty
			$notes = array();
			//bucle to add elements of array notes
			foreach($estudiantes_id as $e){
				$id = $e['id_student'];
				foreach ($_POST['note'][$id] as $clave => $valor) {
						$note = array(
							'id' => $id,
							'indicador' => "{$clave}",
							'nota' => "{$valor}"
						);
						array_push($notes, $note);
					}
				}
				//function add notes  the all group
				$teacher->putNotesList($notes, $id_grado, $id_grupo, $id_periodo, $id_materia, $id_docente);
				break;
			case 'edit':

				break;
			case 'viewAdd':
			/* add notes view */
				/* header */
				include 'views/overall/header.php';

				/* template home */
				include 'views/user/addNotes.php';

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
			case 'viewEdit':
			/* edit notes view */
				/* header */
				include 'views/overall/header.php';

				/* template home */
				include 'views/user/editNotes.php';

				/* scripts*/
				include 'views/overall/scripts.php';
			 	break;
			case 'viewNotes':
			/* notes view */
				/* header */
				include 'views/overall/header.php';

				/* template home */
				include 'views/user/notes.php';

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
			default:
			/* preview note view */
				/* header */
				include 'views/overall/header.php';

				/* template preview notes */
				include 'views/user/preview.php';

				/* scripts*/
				include 'views/overall/scripts.php';
				break;
		}

	endif;
?>
