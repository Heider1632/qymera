<?php
function limpiarCaracteresEspeciales($string ){
 $string = htmlentities($string);
 $string = preg_replace('/\&(.)[^;]*;/', '\\1', $string);
 return $string;
}
?>