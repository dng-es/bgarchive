// JavaScript Document
jQuery(document).ready(function(){
	$("#form-submit").click(function(evento){  
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   var form_ok=true;   
		if (jQuery.trim($("#user_password").val())=="") 
		{
			 $("#password-alert").html("La contrase&ntilde;a no puede estar en blanco.");			 
			 $("#password-alert").fadeIn();
			 $("#password-alert").css("display","block");
			 form_ok=false;
		}
		if (jQuery.trim($("#user_repassword").val())=="") 
		{
			 $("#repassword-alert").html("La contrase&ntilde;a no puede estar en blanco.");			 
			 $("#repassword-alert").fadeIn();
			 $("#repassword-alert").css("display","block");
			 form_ok=false;
		}	
		if ($("#user_repassword").val()!=$("#user_password").val()) 
		{
			 $("#repassword-alert").html("Las contrase&ntilde;as no coinciden.");			 
			 $("#repassword-alert").fadeIn();
			 $("#repassword-alert").css("display","block");
			 form_ok=false;
		}				
		if (form_ok) 
		{
			$("#formData").submit();
		}		
	});
});

