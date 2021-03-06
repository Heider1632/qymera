<?php
    if (!isset($_SESSION['id'])):
      header('location:' .APP_URL.  'default/redirec/');
    else:

      require 'core/model/teacher.php';

      $teacher = new Teacher();

      $grados = $teacher->getGradoDesc();

      $grupos = $teacher->getGrupoDesc();

      $matters = $teacher->getMatters();

      if($view[2] == 'add'){
        if($_POST){
        $new_indicador = $_POST['indicator'];
        $id_grade = $_POST['id_grade'];
        $id_group = $_POST['id_group'];
        $id_matter = $_POST['id_matter'];
          if(!empty($new_indicador)) {
            $teacher->add_indicador($new_indicador, $id_grade, $id_group, $id_matter);
          }else{
            echo 2;
          }
        }else {
          echo 1;
        }
      }else if($view[2] == 'sendrepository'){
        if($_POST){
          $indicator_name = $_POST['indicator'];
          $matter = $_POST['matter'];
          $grade = $_POST['grade'];

          if(!empty($indicator_name) || !empty($matter) || !empty($grade) ){
            $teacher->sendIndicadorToRepository();
          }else{
            echo 2;
          }
        }else{  
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
            include 'views/teacher/indicador.php';

          /* scripts*/
          include 'views/overall/scripts.php';
        endif;
      }

    endif;
?>
