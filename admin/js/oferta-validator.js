// JavaScript Document
jQuery(document).ready(function(){
	
	$("#form-submit").click(function(evento){
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   
	   var resultado_ok=true;   
	   var descripcion = $('#cke_contents_oferta_descripcion iframe').contents().find( 'body' ).html();
	   descripcion=descripcion.replace(/<[^>]+>/g,'');
	   
	   
		if (descripcion=="") 
		{
			 $("#descripcion-alert").html("Debe insertar algo de texto.");			 
			 $("#descripcion-alert").fadeIn();
			 $("#descripcion-alert").css("display","block");
			 resultado_ok=false;
		}
	
		
		if (jQuery.trim($("#oferta_titulo").val())=="") 
		{
			 $("#titulo-alert").html("Debe insertar algo de texto.");			 
			 $("#titulo-alert").fadeIn();
			 $("#titulo-alert").css("display","block");
			 resultado_ok=false;
		}
		if (resultado_ok==true) 
		{
			$("#formData").submit();
		}		
	});
});

