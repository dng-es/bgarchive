// JavaScript Document
jQuery(document).ready(function(){
	
	$("#form-submit").click(function(evento){
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   
	   var resultado_ok=true;   
	   var descripcion = $('#cke_contents_publicacion_descripcion iframe').contents().find( 'body' ).html();
	   descripcion=descripcion.replace(/<[^>]+>/g,'');
		if (descripcion=="") 
		{
			 $("#descripcion-alert").html("Debe insertar algo de texto.");			 
			 $("#descripcion-alert").fadeIn();
			 $("#descripcion-alert").css("display","block");
			 resultado_ok=false;
		}
		if (jQuery.trim($("#publicacion_titulo").val())=="") 
		{
			 $("#titulo-alert").html("Debe insertar algo de texto.");			 
			 $("#titulo-alert").fadeIn();
			 $("#titulo-alert").css("display","block");
			 resultado_ok=false;
		}		
		if (jQuery.trim($("#id_publicacion_tipo").val())=="") 
		{
			 $("#tipo-alert").html("Debe seleccionar un tipo.");			 
			 $("#tipo-alert").fadeIn();
			 $("#tipo-alert").css("display","block");
			 resultado_ok=false;
		}
		if (jQuery.trim($("#publicacion_fecha").val())!="" && esFechaValida($("#publicacion_fecha").attr("value"))==false) 
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

