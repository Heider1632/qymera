<?php
    if (!isset($_SESSION['id'])):
      header('location: index.php');
    else:

      require 'core/model/teacher.php';

      $teacher = new Teacher();

      $grados = $teacher->getGradoDesc();

      $grupos = $teacher->getGrupoDesc();

      $materias = $teacher->getMateria();


      if($view[2] == 'add'){
        if($_POST){
        $new_indicador = str_replace("0-9", "", strtolower($_POST['indicador']));
        $id_grado = $_POST['id_grado'];
        $id_grupo = $_POST['id_grupo'];
        $id_materia = $_POST['id_materia'];
          if(!empty($new_indicador)) {
            $teacher->add_indicador($new_indicador, $id_grado, $id_grupo, $id_materia);
          }else{
            echo 2;
          }
        }else {
          echo 1;
        }
      }else if($view[2] == 'del'){
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
      }else if($view[2] == 'mod'){
        if($_POST){
          $id_indicador = $_POST['id_indicador'];
          $edit_indicador = $_POST['edit_indicador'];
          if(!empty($id_indicador) && !empty($edit_indicador)){
            $teacher->edit_indicador($id_indicador, $edit_indicador);
          }else{
            echo 2;
          }
        }else{
          echo 1;
        }
      }else{
        if(isset($_POST['response'])):
          $_SESSION['edit_id_indicador'] = $_POST['response'];
        else:
        /*template indicador */
          /* header */
          include 'views/overall/header.php';

            /* template inidicator*/
            include 'views/user/indicador.php';

          /* scripts*/
          include 'views/overall/scripts.php';
        endif;
      }

    endif;
?>
