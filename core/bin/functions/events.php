<?php
  require_once('core/model/conexion.php');
  //Obtiene los estudiantes con respecto a un filtro e bsuqueda especifico//

  function getEvents(){
    $db = new Conexion();

    $sql = 'SELECT * FROM eventos';

    $results = $db->query($sql);

    while($x = $db->consultaArreglo($results)){
      $events[] = array(
        'id' => $x['id'],
        'title' => $x['titulo'],
        'body' => $x['cuerpo'],
        'start' => $x['inicio'],
        'end' => $x['finalizacion']
      );
    }

    return $events;

    $db->close();

  }
?>
