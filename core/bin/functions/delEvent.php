<?php
    require_once('core/model/conexion.php');

    function delEvent($id){

      $db = new Conexion();

      $sql = 'DELETE FROM eventos WHERE id = "'.$id.'"';

      $results = $db->query($sql);

    }
?>
