<?php

  # Incluimos la clase conexion para poder heredar los metodos de ella.
  require_once('conexion.php');

  class Admin extends Conexion
  {
    public function add_teacher($name, $lastname, $group_director, $id_grade, $id_group){
      $db = new Conexion();

      $db->close();
    }

    public function del_teacher($id_teacher){
      $db = new Conexion();

      $db->close();
    }

    public function add_materia($name){
      $db = new Conexion();

      $db->close();
    }

    public function del_materia($id_matter){
      $db = new Conexion();

      $db->close();
    }

    public function edit_materia($id_matter, $new_name){
      $db = new Conexion();

      $db->close();
    }

    public function asign_teacher($id_teacher, $id_matter, $id_grade, $id_group){
      $db = new Conexion();

      $db->close();
    }

    public function edit_asign_teacher($id_teacher, $id_matter, $id_grade, $id_group){
      $db = new Conexion();

      $db->close();
    }

    public function asign_cicle($start_date, $end_date){
      $db = new Conexion();

      $db->close();
    }

    public function asign_period($start_period, $end_period, $name){
      $db = new Conexion();

      $db->close();
    }

  }
