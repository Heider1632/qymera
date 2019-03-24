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

}

?>
