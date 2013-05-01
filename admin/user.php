<?php
define('KEYWORDS_META_PAGE', $ini_conf['SiteKeywords']);
define('SUBJECT_META_PAGE', $ini_conf['SiteSubject']);
$menu_sel=0;
function ini_page_header ($ini_conf) {?>
		<!--validacion formulario -->
        <script language="JavaScript" src="js/user-validator.js"></script>        
<?php }
function ini_page_body ($ini_conf){
  $users = new users();
  
  $accion=$_GET['act'];
  if ($accion=='edit'){ $id=$_GET['id'];}
  if ($accion=='edit' and $_GET['accion2']=='ok'){ UpdatePassword($id);}
  elseif ($accion=='new' and $_GET['accion2']=='ok'){ $id=InsertData();$accion="edit";}
	
  ShowData($id,$accion);
}
///////////////////////////////////////////////////////////////////////////////////
// PAGE FUNCTIONS
///////////////////////////////////////////////////////////////////////////////////
function ShowData($id,$accion)
{
	if ($id!=''){
	$users = new users();
	$elements=$users->getUsers(" AND username='".$id."'");
	}
	?>
<div class="ui-state-highlight ui-corner-all" style="padding: 0 .7em  20px 15px; margin-bottom: 20px"> 
<h2>Datos del Usuario</h2>
<form id="formData" name="formData" method="post" action="?page=user&act=<?php echo $accion;?>&amp;id=<?php echo $id;?>&amp;accion2=ok">
<table cellspacing="0" cellpadding="5px">
  <tr>
    <td width="150px" valign="top"><label for="username">Usuario:</label></td>
    <td>
      <input type="text" readonly="readonly" class="input-disabled" Size="40" id="username" name="username" value="<?php echo $elements[0]['username'];?>"/> 
	  <input type="hidden" name="id" value="<?php echo $elements[0]['username'];?>" /> 
      <span id="user-alert" class="alert-message"></span>  
	</td>
  </tr>
  <tr>
    <td valign="top"><label for="user_password">Nueva Contraseña:</label></td>
    <td>
      <input type="password" Size="40" id="user_password" name="user_password" value=""/> 
      <span id="password-alert" class="alert-message"></span>
	</td>
  </tr>
  <tr>
    <td valign="top"><label for="user_repassword">Re-Nueva Contraseña:</label></td>
    <td>
      <input type="password" Size="40" id="user_repassword" name="user_repassword" value=""/> 
      <span id="repassword-alert" class="alert-message"></span>
	</td>
  </tr>  
  <tr>
    <td>&nbsp;</td>
    <td><input type="button" class="yui-btn" id="form-submit" name="form-submit" value="Modificar contraseña" /></td>
  </tr>
</table>
</form>
</div>
<?php
}
  

function UpdatePassword($id)
{
	$users = new users();
	if ($users->updatePassword($_POST['username'],$_POST['user_password'])) {
		echo '<div class="alert-message-ok">Usuario modificado correctamente</div>';}
}
?>