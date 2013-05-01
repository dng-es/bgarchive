<?php
function ErrorMsg($msg)
{
	echo '<div style="color: red">'.$msg.'</div>';
}
function getUrl($url_in)
{
	if (trim($url_in)==''){ return "";}
	elseif (substr($url_in,0,4)=="http") { return $url_in;}
	else { return "?page=".$url_in;}
}
function ShortText($text_html,$num_car)
{
	return substr(strip_tags($text_html),0,strpos(strip_tags($text_html),' ',$num_car))."...";
}	
function NormalizeText( $texto ) {
	//utilizada para subida de ficheros, elimina todos los caracteres extraños
	$texto=strtolower($texto);
	$texto=str_replace('á','a',$texto);
	$texto=str_replace('é','e',$texto);
	$texto=str_replace('í','i',$texto);
	$texto=str_replace('ó','o',$texto);
	$texto=str_replace('ú','u',$texto);
	$texto=str_replace('ñ','n',$texto);
	return ereg_replace( '[^A-Za-z0-9_.-]', '-', utf8_encode($texto));
}
function NormalizeUrl($text_to)
{
		//SOME CHARACTERS URLS DONT LIKE
		$text_to=str_replace("é","e",$text_to);
		$text_to=NormalizeText($text_to);
		return $text_to;
}
function FormatFileSize($peso , $decimales = 2 ) {
	$clase = array(" Bytes", " KB", " MB", " GB", " TB"); 
	return round($peso/pow(1024,($i = floor(log($peso, 1024)))),$decimales ).$clase[$i];
} 
function SendEmail($from_mail,$to_mail,$subject_mail,$body_mail,$html_mode = 0,$from_mail_real = '')
{
	if ($html_mode == 1) {
		$headers_mail = "MIME-Version: 1.0\r\n";
		$headers_mail .= "Content-type: text/html; charset=iso-8859-1\r\n";
	}
	//$headers_mail .= 'From: <'.$from_mail.'>\nReply-To: '.$from_mail.'\nX-Mailer: PHP/' . phpversion();
	$headers_mail .= "From: ".$from_mail_real." <".$from_mail.">";
	if (mail($to_mail,$subject_mail,$body_mail,$headers_mail)) { return true;}
}
function ValidateEmail($email){
	$res = ereg(
	'^[a-z]+([\.]?[a-z0-9_-]+)*@'.// user
	'[a-z0-9]+([\.-]+[a-z0-9]+)*\.[a-z]{2,}$', // server.
	$email);
	return $res;
}
function Paginator($pag,$reg,$total_reg,$pag_dest,$title,$find_text = "")
{
	$total_pag = ceil($total_reg / $reg);
	$reg_ini=(($pag-1)*$reg)+1;
	$reg_end=$pag*$reg;
	if ($reg_ini>$total_reg) {$reg_ini=$total_reg;}
	if ($reg_end>$total_reg) {$reg_end=$total_reg;}
	echo '<div class="pageslist"><span class="messages"> '.$title.' '.$total_reg.' ('.$reg_ini.'-'.$reg_end.')</span>';
	if(($pag - 1) > 0) { echo '<a title="Primera pagina" href="?page='.$pag_dest.'&pag=1&q='.$find_text.'">&laquo;</a>';}
	else { echo '<span title="Primera pagina" class="disabled">&laquo;</span>';}
	
	for ($i=1; $i<=$total_pag; $i++){
		if ($pag == $i) { echo '<span  class="selected">'.$pag.'</span>';}
		else { echo '<a title="Pagina '.$i.'" href="?page='.$pag_dest.'&pag='.$i.'&q='.$find_text.'">'.$i.'</a>';}
	}
	
	if(($pag + 1)<=$total_pag) { echo '<a title="Ultima pagina" href="?page='.$pag_dest.'&pag='.$total_pag.'&q='.$find_text.'">&raquo;</a>';}
	else { echo '<span title="Ultima pagina"  style="float: left; margin: 0px;" class="disabled">&raquo;</span>';}
	echo '</div>';
}
function SearchForm($page,$find_text="")
{
	echo '<FORM action="?page='.$page.'" method="post" class="search-form">Buscar: 
		  <input name="q" type="text" value="'.$find_text.'" size="15" />
		  <input type="submit" class="sprites mini-find Btnsubmit" title="Buscar" value="" />
		  </FORM>';	
}
function NoCache()
{
	//Incluido al principio, hace que el navegador no use cache
	header("Expires: Mon, 1 Jul 1900 00:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-cache, must-revalidate");
	header("Pragma: no-cache");
}
function ExportExcel ($path,$name_file,$array_data)
{
	//tep_set_time_limit(0);
    $backup_file = $name_file.'.xls';
    $fp = fopen($path.$backup_file, 'w');
	$array_headers=$array_data[0];
	fputs($fp,'<table><tr bgcolor="#f0f0f0">');
	array_walk_recursive($array_headers, 'exportExcelHeaders',$fp);
	fputs($fp,"</tr>");
	foreach($array_data as $indice=>$elemento)
	{
		fputs($fp,'<tr>');
		foreach($elemento as $clave=>$valor)
		{
			$cadena=ereg_replace('[[:space:]]+',' ',utf8_decode($array_data[$indice][$clave]));
			fputs($fp,'<td><font  face="Arial, Helvetica, sans-serif">'.$cadena.'</font></td>');            
		}
		fputs($fp,'</tr>');
	} 
	fputs($fp,'</table>');	
	fclose($fp);
	//header("Location: ".$path.$backup_file);	
	?>
    <script>window.open("<?php echo $path.$backup_file; ?>");</script>
    <?php
}
function exportExcelHeaders($elemento, $clave,$fp)
{
    $cadena = '<td><font  face="Arial, Helvetica, sans-serif" color="#0000CC">'.$clave.'</font></td>';
	fputs($fp,$cadena);
}
?>