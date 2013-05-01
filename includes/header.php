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
      <script language="JavaScript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
      <script language="JavaScript" src="js/main.js"></script>
          <!-- scroll -->
    <link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
    <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
    <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
    <script type="text/javascript" id="sourcecode">
    $(function()
    {
        $(".scroll-pane").jScrollPane({showArrows: true});
    });
    </script>
    <!-- fin scroll -->  ';
}

function PageBody($body_params){  
  global $ini_conf,$page;
  echo '</head>
  <body>
    <header>
      <h1>bgArchive</h1>
    </header>
    <div id="page-wrapper">';
}
?>