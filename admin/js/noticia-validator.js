// JavaScript Document
jQuery(document).ready(function(){
	
	$("#form-submit").click(function(evento){
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   
	   var resultado_ok=true;   
	   var descripcion = $('#cke_contents_noticia_descripcion iframe').contents().find( 'body' ).html();
	   descripcion=descripcion.replace(/<[^>]+>/g,'');
	   
	   var entradilla = $('#cke_contents_noticia_entradilla iframe').contents().find( 'body' ).html();
	   entradilla=entradilla.replace(/<[^>]+>/g,'');
	   
	   
		if (descripcion=="") 
		{
			 $("#descripcion-alert").html("Debe insertar algo de texto.");			 
			 $("#descripcion-alert").fadeIn();
			 $("#descripcion-alert").css("display","block");
			 resultado_ok=false;
		}
		if (entradilla=="") 
		{
			 $("#entradilla-alert").html("Debe insertar algo de texto.");			 
			 $("#entradilla-alert").fadeIn();
			 $("#entradilla-alert").css("display","block");
			 resultado_ok=false;
		}		
		
		if (jQuery.trim($("#noticia_titulo").val())=="") 
		{
			 $("#titulo-alert").html("Debe insertar algo de texto.");			 
			 $("#titulo-alert").fadeIn();
			 $("#titulo-alert").css("display","block");
			 resultado_ok=false;
		}
		
		if (esFechaValida($("#noticia_fecha").attr("value"))==false) 
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

