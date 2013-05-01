<?php
//GET CONFIGURATON VARIABLES
$ini_conf = parse_ini_file("includes/config.php");
//LOCALE, DATE AND TIME DEFINITIONS
error_reporting(E_ALL);
@setlocale(LC_TIME, 'es_ES.ISO_8859-1');
define('DATE_FORMAT_SHORT', '%d/%m/%Y');  // this is used for strftime()
define('DATE_FORMAT_LONG', '%A %d %B, %Y'); // this is used for strftime()
define('DATE_FORMAT', 'd/m/Y');  // this is used for date()
define('DATE_TIME_FORMAT', DATE_FORMAT_SHORT . ' %H:%M:%S');

//FUNCIONES Y CLASES. EL ORDEN DE LOS INCLUDES ES IMPORTANTE
include_once("includes/functions.php");
include_once("includes/class.session.php");
include_once("includes/class.connection.php");
include_once("includes/class.users.php");
include_once("includes/class.headers.php");
include_once("includes/class.footers.php");

//REDIRIGIR A PAGINA SOLICITADA O A PAGINA POR DEFECTO
if (isset($_REQUEST['page']) and $_REQUEST['page']!="") {$page=$_REQUEST['page'];}
elseif($_SESSION['user_logged']==true) {$page='home';}
else {$page='login';}
include_once ($page.".php");

//LOGIN-SESSION-LOGOUT
if ($page=='logout') {session::DestroySession();}
if (isset($_POST['form-login-user'])) { session::CreateSession($_POST['form-login-user'],sha1($_POST['form-login-password']));}
else { session::ValidateSession();}

//PAGE HEADERS. SELECCION METATAGS
if (!isset($Key_Words)){ $Key_Words=$ini_conf['SiteKeywords'];}         
if (!isset($Subject)){ $Subject=$ini_conf['SiteSubject'];}
headers::PageHeader(SUBJECT_META_PAGE,KEYWORDS_META_PAGE);
ini_page_header ($ini_conf);
//PAGE BODY
headers::PageBody($page,'');
ini_page_body ($ini_conf);
//PAGE FOOTER
footers::PageFooter();
?>