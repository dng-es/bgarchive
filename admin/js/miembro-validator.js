// JavaScript Document
jQuery(document).ready(function(){
	
	$("#form-submit").click(function(evento){
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   var resultado_ok=true;
	   
		if (jQuery.trim($("#miembro_nombre").val())=="") 
		{
			 $("#nombre-alert").html("Debe insertar algo de texto.");			 
			 $("#nombre-alert").fadeIn();
			 $("#nombre-alert").css("display","block");
			 resultado_ok=false;
		}
		if (jQuery.trim($("#miembro_apellidos").val())=="") 
		{
			 $("#apellidos-alert").html("Debe insertar algo de texto.");			 
			 $("#apellidos-alert").fadeIn();
			 $("#apellidos-alert").css("display","block");
			 resultado_ok=false;
		}
/*		if (jQuery.trim($("#miembro_telefono").val())=="") 
		{
			 $("#telefono-alert").html("Debe insertar algo de texto.");			 
			 $("#telefono-alert").fadeIn();
			 $("#telefono-alert").css("display","block");
			 resultado_ok=false;
		}		
		if (jQuery.trim($("#miembro_despacho").val())=="") 
		{
			 $("#despacho-alert").html("Debe insertar algo de texto.");			 
			 $("#despacho-alert").fadeIn();
			 $("#despacho-alert").css("display","block");
			 resultado_ok=false;
		}*/	
	
		if (jQuery.trim($("#miembro_tipo").val())=="") 
		{
			 $("#tipo-alert").html("Debe seleccionar un tipo.");			 
			 $("#tipo-alert").fadeIn();
			 $("#tipo-alert").css("display","block");
			 resultado_ok=false;
		}								
		if(validateEmail($("#miembro_email").attr("value"))==false){
			 $("#email-alert").html("Debe insertar un email válido.");			 
			 $("#email-alert").fadeIn();
			 $("#email-alert").css("display","block");
			form_ok=false;
		}
	
		if (resultado_ok==true) 
		{
			$("#formData").submit();
		}		
	});
});