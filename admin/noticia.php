<?php
define('KEYWORDS_META_PAGE', $ini_conf['SiteKeywords']);
define('SUBJECT_META_PAGE', $ini_conf['SiteSubject']);
$menu_sel=1;
function ini_page_header ($ini_conf) {?>
		<!--validacion formulario -->
        <script language="JavaScript" src="js/noticia-validator.js"></script>
        <script type="text/javascript" src="./ckeditor/ckeditor.js"></script> 
        <script type="text/javascript" src="./ckfinder/ckfinder.js"></script> 
<?php }
function ini_page_body ($ini_conf){
  include_once ("includes/class.noticias.php");
  $noticias = new noticias();
  
  $accion=$_GET['act'];
  if ($accion=='edit'){ $id=$_GET['id'];}
  if ($accion=='edit' and $_GET['accion2']=='ok'){ UpdateData($id);}
  if (isset($_GET['act3']) and $_GET['act3']=='del') {$noticias->deleteFile($_GET['id'],$_GET['f']);}
  elseif ($accion=='new' and $_GET['accion2']=='ok'){ $id=InsertData();$accion="edit";}
	
  ShowData($id,$accion);
}
///////////////////////////////////////////////////////////////////////////////////
// PAGE FUNCTIONS
///////////////////////////////////////////////////////////////////////////////////
function ShowData($id,$accion)
{
	if ($id!=''){
	$noticias = new noticias();
	$elements=$noticias->getNoticias(" AND id_noticia=".$id);
	}
	?>
<div class="ui-state-highlight ui-corner-all" style="padding: 0 .7em; margin-bottom: 20px">
<h2>Datos de la noticia - <span class="section-link"><a href="?page=noticias">volver a gestión de noticias</a></span>
 - <span class="section-link"><a href="?page=noticia&act=new">agregar nueva noticia</a></span>
 </h2>
<form enctype="multipart/form-data" id="formData" name="formData" method="post" action="?page=noticia&act=<?php echo $accion;?>&amp;id=<?php echo $id;?>&amp;accion2=ok">
<table cellspacing="0" cellpadding="5px">
  <tr>
    <td width="20%" valign="top"><label for="noticia_fecha">Fecha:</label></td>
    <td width="80%">
      <input type="text" maxlength="250" Size="10" id="noticia_fecha" name="noticia_fecha" class="campofecha" value="<?php echo $elements[0]['noticia_fecha'];?>"/>
      <span>&nbsp;formato: aaaa-mm-dd</span>
      <span id="fecha-alert" class="alert-message"></span>	     
	</td>
  </tr> 
  <tr>
    <td width="20%" valign="top"><label for="noticia_titulo">Titulo:</label></td>
    <td width="80%">
      <input type="hidden" name="id" value="<?php echo $elements[0]['id_noticia'];?>" />
      <input type="text" class="input-form" maxlength="250" Size="40" id="noticia_titulo" name="noticia_titulo" value="<?php echo $elements[0]['noticia_titulo'];?>"/> 
      <span id="titulo-alert" class="alert-message"></span>	     
	</td>
  </tr> 
<tr>
    <td valign="top"><label for="noticia_entradilla">Entradilla:</label></td>
    <td>
	   <textarea id="noticia_entradilla" name="noticia_entradilla" rows="12" cols="60"/><?php echo $elements[0]['noticia_entradilla'];?></textarea>
       	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
        <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>        
        <script type="text/javascript">		
		var editor1=CKEDITOR.replace('noticia_entradilla',{customConfig : '../ckeditor/config-comentarios.js'});
	    <!--editor.setData('<p>pulsa en el <b>boton</b></p>');-->
	    CKFinder.setupCKEditor(editor1, './ckfinder/') ;
        </script>
        <span id="entradilla-alert" class="alert-message"></span>
	</td>
  </tr>   
  <tr>
    <td valign="top"><label for="noticia_descripcion">Detalle:</label></td>
    <td>
	   <textarea id="noticia_descripcion" name="noticia_descripcion" rows="12" cols="60"/><?php echo $elements[0]['noticia_descripcion'];?></textarea>      
        <script type="text/javascript">		
		var editor=CKEDITOR.replace('noticia_descripcion',{customConfig : '../ckeditor/config-comentarios.js'});
	    <!--editor.setData('<p>pulsa en el <b>boton</b></p>');-->
	    CKFinder.setupCKEditor(editor, './ckfinder/') ;
        </script>
        <span id="descripcion-alert" class="alert-message"></span>
	</td>
  </tr> 
  <tr>
    <td valign="top"><label for="fichero">Imagen actual:</label><br />
    Dimensiones: ancho 120px, alto 120px.
    </td>
    <td>
       <input type="file" class=".yui-btn" id="fichero" name="fichero" />
	  <?php
      if ($elements[0]['noticia_file']!=""){ echo '<a class="file-form" href="../images/images/'.$elements[0]['noticia_file'].'" target="_blank">archivo actual</a>';}
      ?>
     </td>
  </tr> 
  <tr>
    <td>&nbsp;</td>
    <td><input type="button" class="yui-btn" value="Guardar datos" id="form-submit" name="form-submit" />
    </form>
    <?php
      	if ($elements[0]['noticia_file']!=""){ 
	  		echo '<div style="float: left: width: 150px; display: inline-block">
				  <input type="button" value="Eliminar imágen" class="yui-btn" id="delete-submit" name="delete-submit" 
				  onClick="Confirma(\'¿Seguro que desea eliminar el archivo?\',
			\'?page=noticia&act=edit&act3=del&f='.$elements[0]['noticia_file'].'&id='.$elements[0]['id_noticia'].'\')" />
				  </div>';
			}
      ?>
    </td>
  </tr>
</table>
</div>
<?php
}
  
function InsertData()
{
	$noticias = new noticias();
	if ($noticias->InsertNoticia($_POST['noticia_titulo'],
								 $_POST['noticia_descripcion'],
								 $_POST['noticia_fecha'],
								 $_FILES['fichero'],
								 $_POST['noticia_entradilla'])) {
		echo '<div class="alert-message-ok">Registro insertado correctamente.</div>';
		$id=$noticias->SelectMaxReg("id_noticia","noticias","");
		return $id;
	}
	else
	{
		echo '<div class="alert-message-error">Error al insertar la noticia.</div>';
	}
}

function UpdateData($id)
{
	$noticias = new noticias();
	if ($noticias->UpdateNoticia($id,
								 $_POST['noticia_titulo'],
								 $_POST['noticia_descripcion'],
								 $_POST['noticia_fecha'],
								 $_FILES['fichero'],
								 $_POST['noticia_entradilla'])) {
		echo '<span class="alert-message-ok">Registro modificado correctamente.</span>';}
	else
	{
		echo '<div class="alert-message-error">Error al modificar la noticia.</div>';
	}
}
?>