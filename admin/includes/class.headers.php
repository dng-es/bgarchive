<?php
class headers {
	function PageHeader($Subject,$Key_Words){
	  global $ini_conf;
	  global $menu_sel;
	  if (!isset($menu_sel)){$menu_sel=0;}
	  echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	  <TITLE>Inflammable-Art (administración)</TITLE>
	  <link rel="shortcut icon" href="favicon.ico">
	  <link type="text/css" href="css/blitzer/jquery-ui-1.8.16.custom.css" rel="stylesheet" />
	  <LINK rel="stylesheet" type="text/css" href="css/styles.css" />
	  <LINK rel="stylesheet" type="text/css" href="css/paginator.css" />
	  <LINK rel="stylesheet" type="text/css" href="css/tabledata.css" />
	  <META name="description" content="Panel administracion Grass Roots Spain" />
	  <META NAME="Subject" CONTENT="'.$Subject.'" />
	  <META NAME="Keywords" CONTENT="'.$Key_Words.'" />
	  <META NAME="Robots" CONTENT="index, follow" />
	  <META name="copyright" CONTENT="Copyright (c) 2011 by Oliver Garcia" />
	  <script type="text/javascript" src="js/jquery-1.6.2.min.js"></script>
	  <script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
	  <script type="text/javascript" src="js/jquery.ui.datepicker-es.js"></script>
	  <script type="text/javascript" src="js/jquery.select.js"></script>
	  <script language="JavaScript" src="js/functions.js"></script>';?>
      <script>
		$(document).ready(function(){
			$('select').customStyle();
			$(".yui-btn").button();
			
			
			$( ".accordion" ).accordion({
			   'active': <?php echo $menu_sel;?>
			}); 
			$(".campofecha").datepicker({
				showOn: 'both',
				buttonImage: 'images/calendar.png',
				buttonImageOnly: true,
				changeYear: true,
				numberOfMonths: 1,
				dateFormat: 'yy-mm-dd'
			});
		})	
	 </script>
<?php 
	}
	
	function PageBody($page,$body_params){
	  echo '</head>
	  <body '.$body_params.'>
		<div id="main-container">
		<div id="banner-top-container">';
	if ($_SESSION['user_logged']==true){
		echo '<h1>Administraci&oacute;n Inflammable-Art.com</h1>
			  <span>panel de adminstraci&oacute;n de www.inflammable-art.com. Acceso restringido, usuario logado: <b>'.$_SESSION['user_name'].'</b></span>';		
	}	

	echo' </div>
		  <div id="body-container">';
		  //NAVEGATION MENU
		  if ($_SESSION['user_logged']==true){
			  echo '<div class="accordion" id="menu-container">
						 <h3><a href="#">Inicio</a></h3>
						 <div class="menu-container-block">
							<p>Bienvenid@ '.$_SESSION['user_name'].'</p>
							<ul>
							 <li><a href="?page=home">Inicio</a></li>
							 <li><a href="?page=user&act=edit&id='.$_SESSION['user_name'].'">Mi cuenta</a></li>
							 <li><a href="?page=logout">Logout</a></li>
							</ul>
						</div>
						
						<h3><a href="#">Noticias</a></h3>
						<div class="menu-container-block">
							<p>Gestión de noticias de la Web.</p>
							<ul>
							 <li><a href="?page=noticia&act=new">agregar noticia</a></li>
							 <li><a href="?page=noticias">gesti&oacute;n de noticias</a></li>
							</ul>
						</div>		
						
						<h3><a href="#">Configuración</a></h3>
						<div class="menu-container-block">
							<p>Establecer valores de configuración de la Web.</p>
							<ul>
							 <li><a href="?page=configuracion">mostrar configuración</a></li>
							</ul>
						</div>
				   </div>';
		  }
		echo '<div id="page-container">';
	}
}
?>