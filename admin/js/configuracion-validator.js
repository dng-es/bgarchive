// JavaScript Document
jQuery(document).ready(function(){
	
	$("#form-submit").click(function(evento){
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   
	   var resultado_ok=true;   

		if (jQuery.trim($("#site-name").val())=="") 
		{
			 $("#site-name-alert").html("Debe insertar algo de texto.");			 
			 $("#site-name-alert").fadeIn();
			 $("#site-name-alert").css("display","block");
			 resultado_ok=false;
		}
		if(validateEmail($("#email-contact").attr("value"))==false){
			$("#email-contact-alert").html("Debe insertar un email válido.");			 
			$("#email-contact-alert").fadeIn();
			$("#email-contact-alert").css("display","block");
			resultado_ok=false;
		}
		if (resultado_ok==true) 
		{
			$("#formData").submit();
		}		
	});
});

