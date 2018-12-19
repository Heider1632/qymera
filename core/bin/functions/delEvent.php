<?php
    require_once('core/model/conexion.php');

    function delEvent($idEvento){

      $db = new Conexion();

      $sql = 'DELETE FROM eventos WHERE id = "'.$idEvento.'"';

      $results = $db->query($sql);

    }
?>
