<?php
  if($_GET){
    $id_student = $_GET['id_student'];
    echo $id_student;
  }else{
    header('location: group_director');
  }
?>
