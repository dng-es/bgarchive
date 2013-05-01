<?php
define('KEYWORDS_META_PAGE', $ini_conf['SiteKeywords']);
define('SUBJECT_META_PAGE', $ini_conf['SiteSubject']);
function ini_page_header ($ini_conf) { }
function ini_page_body ($ini_conf){

  echo '<p>Hola <b>'.$_SESSION['user_name'].'</b>, puedes realizar las siguientes acciones:</p>
  		<div class="ui-state-highlight ui-corner-all" style="padding: 0 .7em; margin-bottom: 20px"> 
  		 <h2>Gesti&oacute;n de contenidos</h2>
  		 
		 <ul>
  		  <li><a class="aPanel" href="?page=miembros">Gesti&oacute;n de Personal</a><br />Personal de la empresa para agregar como responsable de secci&oacute;n.</li>
		  <li><a class="aPanel" href="?page=noticias">Gesti&oacute;n de Noticias</a><br />Notas de prensa publicadas en la Web.</li>
  		 </ul>
		</div>

		
		<div class="ui-state-highlight ui-corner-all" style="padding: 0 .7em; margin-bottom: 20px"> 
		  <h2>Configuraci&oacute;n</h2>
		  <ul>
		  <li><a class="aPanel" href="?page=configuracion">Configuración de la Web</a><br />Direcci&oacute;n, datos de contacto, etc.</li>
  		  </ul>
	   </div>';
	   ?>	   
<?php }
///////////////////////////////////////////////////////////////////////////////////
// PAGE FUNCTIONS
///////////////////////////////////////////////////////////////////////////////////

?>