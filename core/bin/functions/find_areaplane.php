<?php
  require_once 'core/model/conexion.php';

  function find_areaplane($id){
    $db = new Conexion();

    $sql = $db->query('SELECT name, ext FROM planes_area WHERE id = "'.$id.'" LIMIT 1');

    while ($f = $db->consultaArreglo($sql)) {
      $file[] = array(
        'name' => $f['name'],
        'ext' => $f['ext']
      );
    }

    return $file;

    $db->close();
  }
?>
