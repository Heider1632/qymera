<?php
// application core //

//default zone //
date_default_timezone_set('America/Bogota');

//const app
define('PUBLIC_DIR', 'public/');
define('APP_TITLE', 'Sistema de notas académicas');
define('APP_URL', 'http://localhost:8888/qymera/');

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
//require('core/bin/functions/round.php');
require('core/bin/functions/events.php');
require('core/bin/functions/addEvent.php');
require('core/bin/functions/delEvent.php');
require('core/bin/functions/modEvent.php');
require('core/bin/functions/indicators.php');
require('core/bin/functions/find_areaplane.php');
?>
