<?php
/**
 * [require_once description]
 * @var [type]
 */
require_once('conexion_two.php');

/**
 * [Imports description]
 */
class Imports{
  /**
   * [importGrades description]
   * @return [type] [description]
   */
  public function importGrades(){
    $db = new Conexion_two();

    $sql = 'SELECT nombre FROM grado';

    $results = $db->query($sql);

    while ($f = $db->consultaArreglo($results)) {
      $grades[] = array(
        'nombre' => $f['nombre'],
      );
    }

    return $grades;

    $db->close();
  }

  public function importGroups(){
    $db = new Conexion_two();

    $sql = 'SELECT grado.nombre, grupo.nombre FROM grado_grupo INNER JOIN grado ON grado.id = grado_grupo.id_grado INNER JOIN grupo ON grupo.id = grado_grupo.id_grupo';

    $results = $db->query($sql);

    while ($f = $db->consultaArreglo($results)) {
      $groups[] = array(
        'nombre_grado' => $f[0],
        'nombre_grupo' => $f[1],
      );
    }

    return $groups;

    $db->close();
  }

}

?>
