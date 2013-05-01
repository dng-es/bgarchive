<?php
class backgrounds extends connection{	  
      //class constructor
      public function __construct(){}
      // metodos de la clase
 
	  function getBackgrounds($filter = "")  
	  {
		$Sql="SELECT * FROM backgrounds WHERE 1=1 ".$filter;
	    $result=connection::execute_query($Sql);
	    $array_data = array();
	    while ($element_data = connection::get_result($result))
	    {  
		  $array_data[] = $element_data;
	    }
	    return $array_data;
	  }   
      public function insertBackground($bg_file,$bg_tags,$bg_license,$bg_users){
		if ($bg_file['name']!='') { $bg_file = self::insertFile($bg_file);}
		else {$nombre_file="";}

	    $Sql="INSERT INTO backgrounds (bg_file,bg_tags,bg_license,bg_users) 
			  VALUES ('".$nombre_file."','".$bg_tags."','".$bg_license."','".$bg_users."')";
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }	  
  
      public function deleteBackground($id){
      	$Sql="DELETE FROM backgrounds WHERE id_bg=".$id;
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }

      public function downloadBackground($id){
      	$Sql="UPDATE backgrounds 
      		  SET bg_downloads=bg_downloads+1 WHERE sha1(id_bg)='".$id."'";
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }

	  public function insertFile($fichero){
		$nombre_archivo = time().'_'.str_replace(" ","_",$fichero['name']);
		$nombre_archivo = strtolower($nombre_archivo);
		$nombre_archivo=NormalizeText($nombre_archivo);
		if (move_uploaded_file($fichero['tmp_name'], "../".PATH_PATTERNS.$nombre_archivo)){   
			return $nombre_archivo;
		}else{ return "";} 
      }	 
  	   
}
?>