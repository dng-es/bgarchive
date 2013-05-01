<?php
include_once("admin/includes/constants.php");
include_once("admin/includes/functions.php");
include_once("admin/includes/class.connection.php");
include_once("admin/includes/class.configuracion.php");


$configuracion = new configuracion();
$site_config=$configuracion->getConfiguracion("");

include_once("admin/includes/class.backgrounds.php");
include_once("includes/header.php");
include_once("includes/class.footers.php");

//REDIRIGIR A PAGINA SOLICITADA O A PAGINA POR DEFECTO
if (isset($_REQUEST['page']) and $_REQUEST['page']!="") {$page=$_REQUEST['page'];}
else {$page='home';}
include_once ($page.".php");

//PAGE HEADERS
PageHeader(SUBJECT_META_PAGE,KEYWORDS_META_PAGE);
ini_page_header ($site_config);
//PAGE BODY
PageBody('');
ini_page_body ($site_config);
//PAGE FOOTER
footers::PageFooter($site_config);
?>