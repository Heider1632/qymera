<?php
  require_once 'core/model/conexion.php';

  function find_unic_indicator($id_indicador){
    $db = new Conexion();

    $sql = 'SELECT indicadores.id, indicadores.nombre, materias.nombre, grado.nombre
    FROM indicadores
    INNER JOIN materias ON indicadores.id_materia = materias.id
    INNER JOIN grado ON indicadores.id_grado = grado.id
    WHERE indicadores.id = "'.$id_indicador.'"';

    $results = $db->query($sql);

    while($f = $db->consultaArreglo($results)){
      $indicator = array(
        'id' => $f['id'],
        'nombre' => $f[1],
        'nombre_materia' => $f[2],
        'nombre_grado' => $f[3]
      );
    }

    return $indicator;

    $db->close();
  }
?>
