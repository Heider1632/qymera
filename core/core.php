<?php
// application core //

//default zone //
date_default_timezone_set('America/Bogota');

//const app
define('PUBLIC_DIR', 'public/');
define('APP_TITLE', 'Sistema de notas académicas');

if(isset($_SERVER['HTTPS'])){
	define('APP_URL', 'https://qymera.net/');
}else{
	define('APP_URL', 'http://localhost:8888/qymera/');
}

//const conexion 
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'root');
define('DB_NAME', 'db-qymera');

//cons of PHPMAILER
define('PHPMAILER_HOTS', '');
define('PHPMAILER_USER', '');
define('PHPMAILER_PASS', '');
define('PHPMAILER_PORT', '');

//const period while//
define('YEAR', date('Y'));
define('DATE', date('Y-m-d'));

//structure//
//Load Composer's autoloader
require('vendor/autoload.php');
require('core/bin/functions/eliminarCaracteres.php');
require('core/bin/functions/arrays_repetidos.php');
require('core/bin/functions/events.php');
require('core/bin/functions/addEvent.php');
require('core/bin/functions/delEvent.php');
require('core/bin/functions/modEvent.php');
require('core/bin/functions/indicators.php');
require('core/bin/functions/find_areaplane.php');
require('core/bin/functions/carbon.php');




?>
