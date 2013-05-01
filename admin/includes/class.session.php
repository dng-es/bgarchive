<?php
session_start();
class session {          
	public static function CheckAccessLevel($minlevel=0)
	{
		if ($_SESSION['user_level'] < $minlevel)
		{
		  ErrorMsg('No dispone de permisos para ver esta p&aacute;gina.');
		  die();
		}	
	}
	public static function ValidateSession()
	{
		if ($_SESSION['user_logged']!=true && $_REQUEST['page']!='login')
		{
		  //Si alguno de los datos ingresados son incorrectos redirigimos a la página de login
		  header ("Location: ?page=login");
		}
		elseif ($_SESSION['user_logged']==true && $_REQUEST['page']=='login')
		{
		  //Si ya esta logado y va a la pagina de login, se manda al inicio
		  header ("Location: ?page=home");
		}	
	}	
	public static function CreateSession($Login_user,$Login_pass)
	{		
		$users = new users();	
		$result_user=$users->getUsers(" AND username='".$Login_user."' 
										AND user_password='".$Login_pass."' 
										AND confirmed=1 
										AND user_level=0 
										AND disabled=0");																		
		if (count($result_user)==1)
		{
		  //Si ambos datos son correctos guardamos estos datos en la session.
		  $_SESSION['user_logged'] = true;
		  $_SESSION['user_name'] = $Login_user;
		  $_SESSION['user_level'] = $result_user[0]['user_level'];
		  $_SESSION['user_date'] = $result_user[0]['date_add'];
		  //Insertar log
		  $users->insertLog($Login_user,'Login adminPanel');
		  //Redirijimos a la pagina correcta.
		  header ("Location: ?page=home");
		}	
	}
	public static function DestroySession()
	{
	  //Insertar log
	  $users = new users();
	  $users->insertLog($_SESSION['user_name'],'Logout adminPanel');
	  session_unset();
	  session_destroy();
	  header ("Location: ?page=login");
	}
}
?>