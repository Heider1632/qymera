<?php
# Clase conexion: permite conectar a la base de datos y ejecutar consultas sql
class Conexion extends mysqli{
    # Funcion que permite conectarnos a la base de datos
    public function __construct()
    {
      parent::__construct('localhost', 'root', 'root', 'db-institute');
      $this->connect_errno ? die('ERROR: existe un problema al conectarse a la base de datos') : null;
    }

    # Funcion que retorna el numero de filas afectadas por una consulta sql
    public function rows($query)
    {
        # mysqli_num_rows: Obtiene el número de filas de un resultado de una consulta
        return mysqli_num_rows($query);
    }

    public function Liberar($query)
    {

        return mysqli_free_results($query);
    }

    public function verificarFila($query)
    {
      # mysql: obtiene una fila de la consulta
      return mysqli_fetch_assoc($query);
    }

    # Funcion que retorna un arreglo con los registros de una consulta
    public function consultaArreglo($query)
    {
      # mysqli_fetch_array Obtiene una fila de resultados como un array asociativo, numérico, o ambos
      return mysqli_fetch_array($query);
    }
    # Function que permite cerrar una conexion de MySQL
    public function close()
    {
      # Accedemos al atributo de conexion y cerramos la conexion
        return mysqli_close();
    }

    # Escapa los caracteres especiales de un string para evitar las inyecciones sql
    public function salvar($des)
    {
    /*
      mysqli_real_escape_string: Escapa los caracteres especiales de una cadena
      para usarla en una sentencia SQL, tomando en cuenta el conjunto de
      caracteres actual de la conexión.
    */
     $string = mysqli_real_escape_string($des);

     return $string;
    }

    # Serie de filtros para almacenar en base de datos
    public function filtrar($string)
    {

      $res = $this->salvar($string);

      # Asignamos los parametros de busqueda
      $buscar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');
      $reemplazar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');

      # str_replace: Reemplaza todas las apariciones del string buscado con el string de reemplazo
      $res = str_replace($buscar, $reemplazar, $string);

      # strtolower: Convierte una cadena a minúsculas
      $res = strtolower($res);

      # trim: Elimina espacio en blanco (u otro tipo de caracteres) del inicio y el final de la cadena
      $res = trim($res);

      return $res;
    }

    # Convierte el acento de base de datos a acentos entendibles
    public function rescatar($string)
    {

      # Asignamos los parametros de busqueda
      $buscar = array('&aacute','&eacute', '&iacute', '&oacute', '&uacute', '&Aacute', '&Eacute', '&Iacute', '&Oacute', '&Uacute', '&ntilde', '&Ntilde');
      $reemplazar = array('á', 'é', 'í', 'ó', 'ú', 'Á', 'É', 'Í', 'Ó', 'Ú', 'ñ', 'Ñ');

      $res = str_replace($buscar, $reemplazar, $string);

      return $res;
    }

} // End Class

?>
