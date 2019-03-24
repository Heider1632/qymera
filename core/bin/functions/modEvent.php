<?php
    require_once('core/model/conexion.php');

    function modEvent($idEvento, $title, $body, $start_date, $end_date){

      $db = new Conexion();

      $sql = 'UPDATE eventos SET() WHERE id = "'.$idEvento.'"';

      $results = $db->query($sql);

    }
?>
