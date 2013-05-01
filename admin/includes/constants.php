<?php
//GET CONFIGURATON VARIABLES
$ini_conf = parse_ini_file("admin/includes/config.php");

//PATHS
define(PATH_PATTERNS,"./data/patterns/");

//LANGUAGE
@setlocale(LC_ALL,"es_ES@euro","es_ES","esp");
date_default_timezone_set('Europe/Madrid');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y');  // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

define('SELECT_LANGUAGE_LABEL', 'selecciona el idioma: ');
define('WELCOME_LABEL', 'Bienvenid@');
?>