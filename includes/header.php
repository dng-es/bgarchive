<?php
//SELECCION METATAGS
//<base href="'.$ini_conf['SiteDomain'].'/">
if (!isset($Key_Words)){ $Key_Words=$site_config['SiteKeywords'];}         
if (!isset($Subject)){ $Subject=$site_config['SiteSubject'];}

function PageHeader($Subject,$Key_Words){
  global $site_config, $ini_conf;
  echo '<html lang="en">
    <head>
      <meta charset="utf-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <TITLE>bgArchive</TITLE>
      <LINK rel="stylesheet" type="text/css" href="css/styles.css" />
      <LINK rel="stylesheet" type="text/css" href="css/jquery.dacolorpicker.css" />
      <script language="JavaScript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
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