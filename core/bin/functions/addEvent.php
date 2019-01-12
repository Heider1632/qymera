<?php
    require_once('core/model/conexion.php');

    function addEvent($title, $body, $start_date, $end_date){

      $db = new Conexion();

      $sql = 'INSERT INTO eventos (titulo, cuerpo, inicio, finalizacion, id_docente)
              VALUES ("'.$title.'", "'.$body.'", "'.$start_date.'", "'.$end_date.'", "'.$_SESSION['id'].'")';

      $results = $db->query($sql);
    }
?>
