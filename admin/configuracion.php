<?php
define('KEYWORDS_META_PAGE', $ini_conf['SiteKeywords']);
define('SUBJECT_META_PAGE', $ini_conf['SiteSubject']);
$menu_sel=7;
include_once ("includes/class.configuracion.php");
function ini_page_header ($ini_conf) {?>
		<!--validacion formulario -->
        <script language="JavaScript" src="js/configuracion-validator.js"></script> 
        <script type="text/javascript" src="./ckeditor/ckeditor.js"></script>  
<?php }
function ini_page_body ($ini_conf){
  
  $accion=$_GET['act'];
  if ($accion=='edit' and (isset($_POST['site-name']) and $_POST['site-name']!='')){ UpdateData();}

	
  ShowData();
}
///////////////////////////////////////////////////////////////////////////////////
// PAGE FUNCTIONS
///////////////////////////////////////////////////////////////////////////////////
function ShowData()
{
	$configuracion = new configuracion();
	$elements=$configuracion->getConfiguracion("");
	?>
<div class="ui-state-highlight ui-corner-all" style="padding: 0 .7em  20px 15px; margin-bottom: 20px">
<h2>Datos de contacto</h2>
<form enctype="multipart/form-data" id="formData" name="formData" method="post" action="?page=configuracion&act=edit">
<table cellspacing="0" cellpadding="5px">
  <tr>
    <td width="30%" valign="top"><label for="site-name">Nombre del sitio:<label></td>
    <td width="70%">
      <input type="text" class="input-form" maxlength="250" Size="40" id="site-name" name="site-name" value="<?php echo $elements[0]['SiteName'];?>"/> 
      <span id="site-name-alert" class="alert-message"></span>	     
	</td>
  </tr>  
  <tr>
    <td width="30%" valign="top"><label for="direccion">Direcci&oacute;n:</label></td>
    <td width="70%">
      <input type="text" class="input-form" maxlength="250" Size="40" id="direccion" name="direccion" value="<?php echo $elements[0]['direccion'];?>"/> 
      <span id="direccion-alert" class="alert-message"></span>	     
	</td>
  </tr> 
  <tr>
    <td width="30%" valign="top"><label for="telefono">Tel&eacute;fono:</label></td>
    <td width="70%">
      <input type="text" class="input-form" maxlength="250" Size="40" id="telefono" name="telefono" value="<?php echo $elements[0]['telefono'];?>"/> 
      <span id="telefono-alert" class="alert-message"></span>	     
	</td>
  </tr> 
  <tr>
    <td width="30%" valign="top"><label for="telefono2">Tel&eacute;fono 2:</label></td>
    <td width="70%">
      <input type="text" class="input-form" maxlength="250" Size="40" id="telefono2" name="telefono2" value="<?php echo $elements[0]['telefono2'];?>"/> 
      <span id="telefono2-alert" class="alert-message"></span>	     
	</td>
  </tr>   
  <tr>
    <td width="30%" valign="top"><label for="fax">Fax:</label></td>
    <td width="70%">
      <input type="text" class="input-form" maxlength="250" Size="40" id="fax" name="fax" value="<?php echo $elements[0]['fax'];?>"/> 
      <span id="fax-alert" class="alert-message"></span>	     
	</td>
  </tr>
  <tr>
    <td width="30%" valign="top"><label for="email-contact">Email de contacto:</label></td>
    <td width="70%">
      <input type="text" class="input-form" maxlength="250" Size="40" id="email-contact" name="email-contact" value="<?php echo $elements[0]['ContactEmail'];?>"/> 
      <span id="email-contact-alert" class="alert-message"></span>	     
	</td>
  </tr>
  <tr>
    <td width="30%" valign="top"><label for="site-title">Título de la web:</label></td>
    <td width="70%">
      <input type="text" class="input-form" maxlength="250" Size="40" id="site-title" name="site-title" value="<?php echo $elements[0]['SiteTitle'];?>"/> 
      <span id="site-title-alert" class="alert-message"></span>	     
	</td>
  </tr> 
  <tr>
    <td width="30%" valign="top"><label for="site-desc">Descripción de la web:</label></td>
    <td width="70%">
      <input type="text" class="input-form" maxlength="250" Size="40" id="site-desc" name="site-desc" value="<?php echo $elements[0]['SiteDesc'];?>"/> 
      <span id="site-desc-alert" class="alert-message"></span>	     
	</td>
  </tr>  
  <tr>
    <td width="30%" valign="top"><label for="site-subject">Asunto de la web:</label></td>
    <td width="70%">
      <input type="text" class="input-form" maxlength="250" Size="40" id="site-subject" name="site-subject" value="<?php echo $elements[0]['SiteSubject'];?>"/> 
      <span id="site-subject-alert" class="alert-message"></span>	     
	</td>
  </tr> 
  <tr>
    <td width="30%" valign="top"><label for="site-keywords">Palabras clave</label><br />Keywords de la web. Separadas por coma.</td>
    <td width="70%">
      <input type="text" class="input-form" Size="40" id="site-keywords" name="site-keywords" value="<?php echo $elements[0]['SiteKeywords'];?>"/> 
      <span id="site-keywords-alert" class="alert-message"></span>	     
	</td>
  </tr>
  <tr>
    <td width="30%" valign="top"><label for="web-footer">Pie de la página:</label></td>
    <td width="70%">
        <textarea id="web-footer" name="web-footer" rows="40" cols="60"/><?php echo $elements[0]['footer'];?></textarea>
       	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>        
        <script type="text/javascript">
		CKEDITOR.config.customConfig = './ckeditor/config-comentarios.js';
		CKEDITOR.replace('web-footer', { customConfig : '../ckeditor/config-comentarios-mini.js' });	
        </script>
        <span id="web-footer-alert" class="alert-message"></span>	     
	</td>
  </tr>             
  <tr>
    <td>&nbsp;</td>
    <td><input type="button" class="yui-btn" id="form-submit" name="form-submit" value="Guardar configuración" /></td>
  </tr>
</table>
</form>
</div>
<?php
}
function UpdateData()
{
	$configuracion = new configuracion();
	if ($configuracion->UpdateConfiguracion($_POST['telefono'],
								 $_POST['telefono2'],
								 $_POST['fax'],
								 $_POST['direccion'],
								 $_POST['web-footer'],
								 $_POST['email-contact'],
								 $_POST['site-name'],
								 $_POST['site-title'],
								 $_POST['site-desc'],
								 $_POST['site-subject'],
								 $_POST['site-keywords'])) {
		echo '<span class="alert-message-ok">Registro modificado correctamente.</span>';}
	else
	{
		echo '<div class="alert-message-error">Error al modificar la noticia.</div>';
	}
}
?>