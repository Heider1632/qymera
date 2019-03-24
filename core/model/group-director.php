<?php
    require_once('conexion.php');

    class GroupDirector
    {
        //data biding functions to choise the group
        public function getGradeC()
        {
            $db = new Conexion();

            $sql = 'SELECT grado.id, grado.nombre, grupo.id, grupo.namescape
							FROM docentes
							INNER JOIN grado on docentes.id_grado = grado.id
							INNER JOIN grupo on docentes.id_grupo = grupo.id
							WHERE docentes.id = "'.$_SESSION['id'].'" ';

            $results = $db->query($sql);

            while ($f = $db->consultaArreglo($results)) {
                $getGradoC[] = array(
                    'id_grado' =>$f[0],
                    'nombre_grado' => $f['nombre'],
                    'id_grupo' => $f[2],
                    'nombre_grupo' => $f['namescape']
                );
            }

            return $getGradoC;

            $db->close();
        }

        public function getStudentsC($id_grado, $id_grupo)
        {
            $db = new Conexion();

            //sql query
            $sql = 'SELECT id, foto, primer_nombre, segundo_nombre, primer_apellido, segundo_apellido
											FROM estudiantes
											WHERE estudiantes.id_grado = "'.$id_grado.'"
											AND estudiantes.id_grupo = "'.$id_grupo.'"';
            //launch query to promise
            $results = $db->query($sql);
            //
            while ($f = $db->consultaArreglo($results)) {
                $getStudentsC[] = array(
                    'id_student' => $f['id'],
                    'foto' => $f['foto'],
                    'primer_nombre' => $f['primer_nombre'],
                    'segundo_nombre' => $f['segundo_nombre'],
                    'primer_apellido' => $f['primer_apellido'],
                    'segundo_apellido' => $f['segundo_apellido']
                );
            }

            return $getStudentsC;
            //sql close conexion//
            $db->close();
        }

        public function getMatterC($id_grado, $id_grupo)
        {
            $db = new Conexion();

            $sql = 'SELECT materia.id, materias.nombre FROM information_docente
            INNER JOIN materias ON materias.id = information_docente.id_materia
            WHERE id_docente = "'.$_SESSION['id'].'" and id_grado = "'.$id_grado.'" and id_grupo = "'.$id_grupo.'"';

            $results = $db->query($sql);

            while ($f = $db->consultaArreglo($results)) {
                $getMatterC[] = array(
                  'id_materia' => $f['id'],
                  'materia' => $f['nombre']
                );
            }

            return $getMatterC;

            $db->close();
        }
    }
