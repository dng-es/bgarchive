<?php
class configuracion extends connection{	  
      //class constructor
      public function __construct(){}
      // metodos de la clase
 
	  function getConfiguracion($filter = "")  
	  {
		$Sql="SELECT * FROM configuracion WHERE 1=1 ".$filter;
	    $result=connection::execute_query($Sql);
	    $array_data = array();
	    while ($element_data = connection::get_result($result))
	    {  
		  $array_data[] = $element_data;
	    }
	    return $array_data;
	  }   
 
      public function updateConfiguracion($telefono,$telefono2,$fax,$direccion,$footer,$ContactEmail,$SiteName,$SiteTitle,$SiteDesc,$SiteSubject,$SiteKeywords){	 
		$Sql="UPDATE configuracion SET
			 telefono='".$telefono."',
			 telefono2='".$telefono2."',
			 fax='".$fax."',
			 direccion='".$direccion."',
			 footer='".$footer."',
			 ContactEmail='".$ContactEmail."',
			 SiteName='".$SiteName."',
			 SiteTitle='".$SiteTitle."',
			 SiteDesc='".$SiteDesc."',
			 SiteSubject='".$SiteSubject."',
			 SiteKeywords='".$SiteKeywords."'";
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }
}
?>