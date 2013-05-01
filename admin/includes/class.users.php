<?php
class users extends connection{	  
      //class constructor
      public function __construct(){}
      // metodos de la clase
	  public function getUsers($filter = ""){   
	    $Sql="SELECT * FROM users WHERE 1=1 ".$filter;
	    $result=connection::execute_query($Sql);   
	    $users_data = array();  
	    while ($user_data = connection::get_result($result)){  
		  $users_data[] = $user_data;  
	    }
	    return $users_data;  
	  }   
      public function insertUser($username,$user_password,$user_level,$email,$name_user,$confirmed,$disabled){
	    $Sql="INSERT INTO users (username,user_password,user_level,email,confirmed,disabled) 
			  VALUES ('".$username."','".sha1($user_password)."','.user_level.','".$email."',".$confirmed.",".$disabled.")";
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }	  
      public function updateUser($username,$user_password,$user_level,$email,$name_user,$confirmed,$disabled){
		$Sql="UPDATE users SET
			 user_level='".$user_level."',
			 email='".$email."',
			 name='".$name_user."',
			 confirmed=".$confirmed.",
			 disabled=".$disabled."
			 WHERE username='".$username."'";
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }
      public function updatePassword($username,$user_password){
		$Sql="UPDATE users SET
			 user_password=sha1('".$user_password."')
			 WHERE username='".$username."'";
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }	  
	  public function disableUser($username){
		$Sql="UPDATE users SET
			 disabled=1,
			 date_disabled=Now()
			 WHERE username='".$username."'";
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }
      public function deleteUser($username){
      	$Sql="DELETE FROM users WHERE username='".$username."'";
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }
	  public function insertLog($username,$action){
		$Sql="INSERT INTO users_log (username,action) 
			  VALUES ('".$username."','".$action."')";
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      }
	  public function getUsersLogs($filter = ""){   
	    $Sql="SELECT * FROM users_log WHERE 1=1 ".$filter;
	    $result=connection::execute_query($Sql);   
	    $users_data = array();  
	    while ($user_data = connection::get_result($result)){  
		  $users_data[] = $user_data;  
	    }
	    return $users_data;  
	  }
	  public function deleteUserLog($filter=""){
      	$Sql="DELETE FROM users_log WHERE 1=1 ".$filter;
		if (connection::execute_query($Sql)){ return true;}
		else { return false;}
      } 
}
?>