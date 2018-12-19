<?php
require_once('conexion.php');

class Bachelor{

  public function putNotesList($notes, $id_grado, $id_grupo, $id_periodo, $id_materia, $id_docente){
    $db = new Conexion();

    foreach ($notes as $n) {

      $sql = 'INSERT INTO notas (nota, id_indicador, id_periodo, id_estudiante, id_grado, id_grupo, id_materia, id_docente) VALUES ("'.$n['nota'].'", "'.$n['indicador'].'", "'.$id_periodo.'", "'.$n['id'].'", "'.$id_grado.'", "'.$id_grupo.'", "'.$id_materia.'", "'.$id_docente.'")';

      $db->query($sql);
    }

    header('Location: notas');

    $db->close();
  }

  public function editNotesList($notes){
    $db = new Conexion();

    foreach($notes as $note){
      $db->query('UPDATE notas SET nota = "'.$note['nota'].'"
      WHERE id =  "'.$note['id'].'"');
    }

    header('Location: notas');

    $db->close();
  }

  public function putNote($note, $id_estudiantes, $id_indicador, $id_grado, $id_grupo, $id_periodo, $id_materia, $id_docente){
    $db = new Conexion();

      $db->query('INSERT INTO notas (nota, id_indicador, id_periodo, id_estudiante, id_grado, id_grupo, id_materia, id_docente)
      VALUES("'.$note.'", "'.$id_indicador.'", "'.$id_periodo.'", "'.$id_estudiante.'". "'.$id_grado.'". "'.$id_grupo.'", "'.$id_materia.'", "'.$id_docente.'")
      ');

    header('Location: notas');

    $db->close();
  }

  public function editNote($note, $id){
    $db = new Conexion();

    $db->query('UPDATE notas SET nota = "'.$note.'" WHERE id =  "'.$id.'"');

    header('Location: notas');

    $db->close();
  }
}
?>
