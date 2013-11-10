<?php
//SELECCION METATAGS
//<base href="'.$ini_conf['SiteDomain'].'/">
if (!isset($Key_Words)){ $Key_Words=$site_config['SiteKeywords'];}         
if (!isset($Subject)){ $Subject=$site_config['SiteSubject'];}

function PageHeader($Subject,$Key_Words){
  global $site_config, $ini_conf;
  echo '<!DOCTYPE HTML>
    <html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <TITLE>bgArchive</TITLE>
      <LINK rel="shortcut icon" href="favicon.ico">
      <link rel="icon" type="image/ico"  href="favicon.ico" > 
      <link href="http://fonts.googleapis.com/css?family=Holtwood+One+SC|Playfair+Display+SC" rel="stylesheet" type="text/css">
      <LINK rel="stylesheet" type="text/css" href="css/styles.css" />
      <LINK rel="stylesheet" type="text/css" href="css/jquery.dacolorpicker.css" />
      <LINK rel="stylesheet" type="text/css" href="css/bgarchive/jquery-ui-1.10.2.custom.min.css" />
      <LINK rel="stylesheet" href="css/pictonic.css">
      
      <script language="JavaScript" src="js/jquery.js"></script>
      <script language="JavaScript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
      <script type="text/javascript" src="js/jquery.numeric.js"></script>
      <script language="JavaScript" src="js/main.js"></script>
      <script type="text/javascript" src="js/jquery.dacolorpicker.min.js"></script>';
}

function PageBody($body_params){  
  global $ini_conf,$page;
  echo '</head>
  <body>
    <div id="page-wrapper">';
}
?>