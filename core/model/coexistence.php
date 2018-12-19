<?php
    require_once('conexion.php');

    class Coexistence
    {
        //functiones del coordinador de convivencia...//
        public function getPeriodos()
        {
            $db = new Conexion();

            $consulta = 'SELECT * FROM periodo';

            $results = $db->query($consulta);

            while ($x = $db->consultaArreglo($results)) {
                $periodos[] = array(
                'periodo_id' => $x[3],
                'periodo_nombre' => $x[2],
                'fecha_inicio_periodo' => $x[1],
                'fecha_cierre_periodo' => $x[0]
            );
            }

            return $periodos;

            $db->close();
        }

        //Obtiene los estudiantes con respecto a un filtro e bsuqueda especifico//

        public function getEstudiantes($id_grado, $id_grupo)
        {
            $estudiantes = null;

            $db = new Conexion();

            $consulta = 'SELECT estudiantes.id, estudiantes.n, estudiantes.foto, estudiantes.primer_nombre, estudiantes.segundo_nombre, estudiantes.primer_apellido, estudiantes.segundo_apellido, grado.nombre, grupo.namescape FROM estudiantes
	                INNER JOIN grado ON estudiantes.id_grado = grado.id
	                INNER JOIN grupo ON estudiantes.id_grupo = grupo.id
	                WHERE grado.id = "'.$id_grado.'" and grupo.id = "'.$id_grupo.'"';


            $results = $db->query($consulta);

            while ($fila = $db->consultaArreglo($results)) {
                $estudiantes[] = array(
          				'id' => $fila['id'],
          				'n' => $fila['n'],
          				'foto' => $fila['foto'],
          				'primer_nombre' => $fila['primer_nombre'],
          				'segundo_nombre' => $fila['segundo_nombre'],
          				'primer_apellido' => $fila['primer_apellido'],
          				'segundo_apellido' => $fila['segundo_apellido']
        				);
            }

            return $estudiantes;

            $db->close();
        }

        //Obtener indicador con respecto al docente//

        public function all_indicadores()
        {
            $db = new Conexion();

            $consulta = 'SELECT indicadores.nombre, grado.nombre
	                FROM indicadores
	                INNER JOIN grado ON indicadores.id_grado = grado.id';

            $results = $db->query($consulta);

            while ($fila = $db->consultaArreglo($results)) {
                $indicadores[] = array(
        					'nombre' => $fila['nombre'],
          				'grado_nombre' => $fila[1]
        				);
            }

            return $indicadores;

            $db->close();
        }

        //Obtiene los estudiantes con respecto a un filtro e bsuqueda especifico//

        public function periodo($fecha)
        {
            $db = new Conexion();

            $consulta = $db->query('SELECT * FROM periodo WHERE "'.$fecha.'" >= fecha_inicio and "'.$fecha.'" <= fecha_cierre');

            while ($x = $db->consultaArreglo($consulta)) {
                $inf_periodo[] = array(
            			'id_periodo' => $x['id'],
            			'nombre_periodo' => $x['nombre']
          		);
            }

            return $inf_periodo;

            $db->close();
        }
        
				public function getGrados()
				{
						$db = new Conexion();

						$consulta = 'SELECT grado.id, grado.nombre, grupo.namescape FROM grado INNER JOIN grado_grupo ON grado_grupo.id_grado = grado.id INNER JOIN grupo ON grado_grupo.id_grupo = grupo.id';

						$registro = $db->query($consulta);

						while ($fila = mysqli_fetch_array($registro)) {
								$grados[] = array(

									'id_grado' => $fila['id'],
									'nombre' => $fila['nombre'],
									'grupo' => $fila['namescape']

							);
						}

						return $grados;

						$db->cerrar();
				}

				public function getGrupos($estudiantes, $id_grado, $id_grupo)
				{
						$db = new Conexion();

						$consulta = 'SELECT estudiantes.id, estudiantes.foto, estudiantes.primer_nombre, estudiantes.segundo_nombre, estudiantes.primer_apellido, estudiantes.segundo_apellido FROM estudiantes
											INNER JOIN grado ON estudiantes.id_grado = grado.id
											INNER JOIN grupo ON estudiantes.id_grupo = grupo.id
											WHERE grado.id = "'.$id_grado.'" AND grupo.id = "'.$id_grupo.'"';


						$results = $db->query($consulta);

						while ($fila = mysqli_fetch_array($results)) {
								$estudiantes[] = array(

						'id' => $fila['id'],
						'foto' => $fila['foto'],
						'primer_nombre' => $fila['primer_nombre'],
						'segundo_nombre' => $fila['segundo_nombre'],
						'primer_apellido' => $fila['primer_apellido'],
						'segundo_apellido' => $fila['segundo_apellido'],

					);
						}

						return $estudiantes;

						$db->cerrar();
				}
    }
