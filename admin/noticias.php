<?php
define('KEYWORDS_META_PAGE', $ini_conf['SiteKeywords']);
define('SUBJECT_META_PAGE', $ini_conf['SiteSubject']);
$menu_sel=1;
function ini_page_header ($ini_conf) { }
function ini_page_body ($ini_conf){

  echo '<div  class="ui-state-highlight ui-corner-all" style="padding: 20px 20px 15px; margin-bottom: 20px">
  		<h1>Gesti&oacute;n de noticias</h1>';
  include_once ("includes/class.noticias.php");
  $noticias = new noticias();
  if (isset($_REQUEST['act']) and $_REQUEST['act']=='del') { $noticias->DeleteNoticia($_REQUEST['id']);}

  //SHOW ADD NEW
  echo '<div class="buttons-container">
  		<ul id="icons" class="ui-widget ui-helper-clearfix">		
		<li class="ui-iconos ui-state-default ui-corner-all" title="Nuevo">
		<a href="?page=noticia&act=new" title="Nueva">
		<span style="float: left; margin: 0 4px;" class="ui-icon ui-icon-document"></span></a>
		</li>';
	
		

  //EXPORT EXCEL - SHOW AND GENERATE
  if (isset($_REQUEST['export']) and $_REQUEST['export']==true) {
	  $elements=$noticias->getNoticias($filter);
	  $file_name='exported_file'.date("YmdGis");
	  ExportExcel('files/',$file_name,$elements);}
	  
	echo '<li class="ui-iconos ui-state-default ui-corner-all" title="Nuevo">
			<a href="?page='.$_REQUEST['page'].'&export=true&q='.$find_text.'" title="Exportar">
			<span style="float: left; margin: 0 4px;" class="ui-icon ui-icon-calculator"></span>
			</a>				
		  </li>';	  
  echo '</ul>
  		</div>';
		
  //SHOW PAGINATOR
  $reg = 10;
  if (isset($_GET["pag"])) {$pag = $_GET["pag"];}
  if (!$pag) { $inicio = 0; $pag = 1;}
  else { $inicio = ($pag - 1) * $reg;}
  $total_reg = $noticias->CountReg('noticias',$filter);
  $filter.=" ORDER BY noticia_fecha DESC,id_noticia ";
  $filter.=" LIMIT ".$inicio.",".$reg;
  Paginator($pag,$reg,$total_reg,'noticias','noticias',$find_text);

  //SHOW DATA 
  $elements=$noticias->getNoticias($filter);
  echo '<table class="TableData" cellpadding="2" cellspacing="0">
  		 <tr">
		  <th></th>
		  <th>Fecha</th>
		  <th>T&iacute;tulo</th>
		 </tr>';
  foreach($elements as $element):
    if ($color_row=='TableRow') {$color_row='TableRow2';}
	else {$color_row='TableRow';}
	echo '<tr class="'.$color_row.'">
			<td nowrap="nowrap" width="60px">
			<div class="sprites mini-edit">
			  <a title="Editar noticia: '.$element['id_noticia'].'" href="?page=noticia&act=edit&id='.$element['id_noticia'].'">
			  <span>Editar</span></a>
			</div>
			<div class="sprites mini-del">
			<a href="#" onClick="Confirma(\'¿Seguro que desea eliminar la noticia '.$element['noticia_titulo'].'?\',
			\'?page=noticias&pag='.$pag.'&act=del&id='.$element['id_noticia'].'\')" 
			title="Eliminar noticia: '.$element['id_noticia'].'"/><span>Eliminar</span></a>
			</div>
		 	</td>
			<td onClick="location.href=\'?page=noticia&act=edit&id='.$element['id_noticia'].'\'">'.$element['noticia_fecha'].'</td>
		 	<td onClick="location.href=\'?page=noticia&act=edit&id='.$element['id_noticia'].'\'">'.$element['noticia_titulo'].'</td>
		 <tr>';   
  endforeach;
  echo '</table>
  	</div>';
}
?>