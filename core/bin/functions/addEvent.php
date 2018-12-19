<?php
    require_once('core/model/conexion.php');

    function addEvent($title, $body, $start_date, $end_date){

      $db = new Conexion();

      $sql = 'INSERT INTO eventos (title, body, start, end)
              values("'.$titulo.'", "'.$body.'", "'.$start_date.'", "'.$end_date.'")';

      $results = $db->query($sql);
    }
?>
