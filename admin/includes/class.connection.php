<?php
class connection {
	private $dbhost;
	private $dbname;
	private $dbuser;
	private $dbpass;
	private $debug_app;
	private $link;
	public function __construct(){ }
	private function __set($var_name, $var_val) { $this->$var_name = $var_val;}
	private function __get($var) 
    {
	  try { 
		  if(!defined("self::$var")) {throw new Exception('ERROR: variable '.$var.' is not defined.');}
		  else { return self::$var;}
	  } 
	  catch (Exception $e) { ErrorMsg($e->getMessage());} 
    }
		
	public function set_config()
	{
		global $ini_conf;
		$this->dbhost=$ini_conf['host'];
		$this->dbname=$ini_conf['db'];
		$this->dbuser=$ini_conf['user'];
		$this->dbpass=$ini_conf['pass'];
		$this->debug_app=$ini_conf['debug_app'];
	}
///////////////////////////////////////////////////////////////////////////////////
// FUNCIONES ESPECIFICAS MYSQL
///////////////////////////////////////////////////////////////////////////////////
	public function conex()
	{
	  $this->set_config(); 
	  try {
		  if (!$link = mysql_connect($this->dbhost,$this->dbuser,$this->dbpass)){ throw new Exception(mysql_error());}
		  try { 
		  		mysql_set_charset('utf8',$link);
		  		if (!mysql_select_db($this->dbname,$link)){ throw new Exception(mysql_error());}
				$this->link=$link;
		  }
		  catch (Exception $e) { ErrorMsg($e->getMessage(),$this->debug_app);}  	  
	  }
	  catch (Exception $e) { ErrorMsg($e->getMessage(),$this->debug_app);} 
	}

	public function close_conex() { mysql_close($this->link);}
	public function get_result($result, $tipo = MYSQL_ASSOC) { return mysql_fetch_array($result, $tipo);} 
	public function execute_query($sql_query)  
	{     
	  try
	  {
		  self::conex();
		  if ($da_query = mysql_query($sql_query, $this->link)) {
			self::close_conex();
			return $da_query;  
		  }
		  else {
			$msg="<b>SQL ERROR in query:</b> ".$sql_query."<br /><b>SQL ERROR description:</b> ".mysql_error();
			self::close_conex();
			throw new Exception($msg);
		  }  
	  }
	  catch (Exception $e) { ErrorMsg($e->getMessage(),$this->debug_app);} 
	}
///////////////////////////////////////////////////////////////////////////////////
// FUNCIONES EXTRA BBDD
///////////////////////////////////////////////////////////////////////////////////
	public function SelectMaxReg($field,$table,$filter=""){
	    $Sql="SELECT max(".$field.") AS max_counter FROM ".$table." WHERE 1=1 ".$filter;
		$result=self::execute_query($Sql);
		$row=self::get_result($result);
		return $row['max_counter'];
    }
	public function CountReg($table,$filter=""){
	    $Sql="SELECT count(*) AS counterReg FROM ".$table." WHERE 1=1 ".$filter;
		$result=self::execute_query($Sql);
		$row=self::get_result($result);
		return $row['counterReg'];
    }
}
?>