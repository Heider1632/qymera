<?php
  require_once('core/model/conexion.php');
  //Obtiene los estudiantes con respecto a un filtro e bsuqueda especifico//

  function getEvents(){
    $db = new Conexion();

    $sql = 'SELECT * FROM eventos';

    $results = $db->query($sql);

    while($x = $db->consultaArreglo($results)){
      $events[] = array(
        'id_events' => $x[0],
        'title' => $x[1],
        'body' => $x[2],
        'start' => $x[3],
        'end' => $x[4]
      );
    }

    return $events;

    $db->close();

  }
?>
