<?php
    if (!isset($_SESSION['id'])){
      header('location: index.php');
    }

    require 'core/model/teacher.php';

    $teacher = new Teacher();

    $id_docente = $_SESSION['id'];

    $id_periodo = $_SESSION['id_periodo'];

    $grados = ($teacher->getGradoDesc());

    $materias = ($teacher->getMateria());

    $action = isset($_GET['action']) ? $_GET['action'] : 'view';

    switch ($action) {
      case 'add':
        if($_POST){
        $new_indicador = strtolower($_POST['indicador']);
        $id_grado = $_POST['id_grado'];
        $id_materia = $_POST['id_materia'];
        $n = $_POST['n'];
          if(!empty($new_indicador)) {
            $teacher->add_indicador($n, $new_indicador, $id_docente, $id_grado, $id_materia, $id_periodo);
          }else{
            echo 2;
          }
        }else {
          echo 1;
        }
        break;
      case 'mod':
        if($_POST){
          $id_indicador = $_POST['id_indicador'];
          $edit_indicador = $_POST['edit_indicador'];
          $n_indicador = $_POST['edit_n'];
          if(!empty($id_indicador) && !empty($edit_indicador)){
            $teacher->edit_indicador($id_indicador, $edit_indicador);
          }else{
            echo 2;
          }
        }else{
          echo 1;
        }
        break;
      case 'del':
        if($_POST){
          $id_indicador = $_POST['id_ind'];
          if(!empty($id_indicador)){
              $teacher->del_indicador($id_indicador);
          }else{
            echo 2;
          }
        }else{
          echo 1;
        }
        break;
      default:
        /*template indicador */
          /* header */
          include 'views/overall/header.php';

            /* template inidicator*/
            include 'views/user/indicador.php';

          /* scripts*/
          include 'views/overall/scripts.php';
        break;
    }
?>
