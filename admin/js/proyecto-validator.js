// JavaScript Document
jQuery(document).ready(function(){
	
	$("#form-submit").click(function(evento){
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   
	   var resultado_ok=true;   
	   var descripcion = $('#cke_contents_proyecto_descripcion iframe').contents().find( 'body' ).html();
	   descripcion=descripcion.replace(/<[^>]+>/g,'');
	   
	   var descripcion_en = $('#cke_contents_proyecto_descripcion_en iframe').contents().find( 'body' ).html();
	   descripcion_en=descripcion_en.replace(/<[^>]+>/g,'');	   
		if (descripcion=="") 
		{
			 $("#descripcion-alert").html("Debe insertar algo de texto.");			 
			 $("#descripcion-alert").fadeIn();
			 $("#descripcion-alert").css("display","block");
			 resultado_ok=false;
		}
		if (descripcion_en=="") 
		{
			 $("#descripcion_en-alert").html("Debe insertar algo de texto.");			 
			 $("#descripcion_en-alert").fadeIn();
			 $("#descripcion_en-alert").css("display","block");
			 resultado_ok=false;
		}		
		if (jQuery.trim($("#proyecto_titulo").val())=="") 
		{
			 $("#titulo-alert").html("Debe insertar algo de texto.");			 
			 $("#titulo-alert").fadeIn();
			 $("#titulo-alert").css("display","block");
			 resultado_ok=false;
		}
		if (esFechaValida($("#proyecto_fecha").attr("value"))==false) 
		{
			 $("#fecha-alert").html("Debe insertar una fecha v&aacute;lida, formato aaaa-mm-dd.");			 
			 $("#fecha-alert").fadeIn();
			 $("#fecha-alert").css("display","block");
			 resultado_ok=false;
		}
		if (resultado_ok==true) 
		{
			$("#formData").submit();
		}		
	});
});

