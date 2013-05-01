// JavaScript Document
jQuery(document).ready(function(){
	
	$("#form-submit").click(function(evento){
		if (Validar()==true) 
		{
			var destino=$("#destino").val();
			document.formData.action=destino;
			document.formData.target='_self';
			document.formData.submit(); 			
			$("#formData").submit();
		}	
	});
	$("#preview-submit").click(function(evento){
		if (Validar()==true) 
		{
			document.formData.action='../?page=preview';
			document.formData.target='_blank';
			document.formData.submit(); 
		}	
	});	
	
	function Validar(){
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   var resultado_ok=true;   
	   var descripcion = $('#cke_contents_pagina_descripcion iframe').contents().find( 'body' ).html();
	   descripcion=descripcion.replace(/<[^>]+>/g,'');
	   
	   
	   var descripcion_lateral = $('#cke_contents_fichero_lateral iframe').contents().find( 'body' ).html();
	   descripcion_lateral=descripcion_lateral.replace(/<[^>]+>/g,'');
	   
		if (descripcion=="") 
		{
			 $("#descripcion-alert").html("Debe insertar algo de texto.");			 
			 $("#descripcion-alert").fadeIn();
			 $("#descripcion-alert").css("display","block");
			 resultado_ok=false;
		}
		
		if (jQuery.trim($("#pagina_nombre").val())=="") 
		{
			 $("#nombre-alert").html("Debe insertar un nombre.");			 
			 $("#nombre-alert").fadeIn();
			 $("#nombre-alert").css("display","block");
			 resultado_ok=false;
		}
		
		if (jQuery.trim($("#fichero").val())=="") 
		{
			 $("#fichero-alert").html("Debe agregar un banner.");			 
			 $("#fichero-alert").fadeIn();
			 $("#fichero-alert").css("display","block");
			 resultado_ok=false;
		}
/*		if (descripcion_lateral=="") 
		{
			 $("#fichero-lateral-alert").html("Debe agregar un banner.");			 
			 $("#fichero-lateral-alert").fadeIn();
			 $("#fichero-lateral-alert").css("display","block");
			 resultado_ok=false;
		}	*/			
		
		if (jQuery.trim($("#pagina_titulo").val())=="") 
		{
			 $("#titulo-alert").html("Debe insertar algo de texto.");			 
			 $("#titulo-alert").fadeIn();
			 $("#titulo-alert").css("display","block");
			 resultado_ok=false;
		}	
		if (jQuery.trim($("#id_miembro").val())=="") 
		{
			 $("#responsable-alert").html("Debe seleccionar un responsable.");			 
			 $("#responsable-alert").fadeIn();
			 $("#responsable-alert").css("display","block");
			 resultado_ok=false;
		}				
		return resultado_ok;		
	}
});

