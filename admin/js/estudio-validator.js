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
	
	function Validar(){
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   var resultado_ok=true;   
	   var descripcion = $('#cke_contents_estudio_descripcion iframe').contents().find( 'body' ).html();
	   descripcion=descripcion.replace(/<[^>]+>/g,'');
	   
	   
		if (descripcion=="") 
		{
			 $("#descripcion-alert").html("Debe insertar algo de texto.");			 
			 $("#descripcion-alert").fadeIn();
			 $("#descripcion-alert").css("display","block");
			 resultado_ok=false;
		}
		
		if (jQuery.trim($("#fichero").val())=="") 
		{
			 $("#fichero-alert").html("Debe agregar una im&aacute;gen.");			 
			 $("#fichero-alert").fadeIn();
			 $("#fichero-alert").css("display","block");
			 resultado_ok=false;
		}
		if (jQuery.trim($("#fichero_pdf").val())=="") 
		{
			 $("#fichero-pdf-alert").html("Debe agregar un fichero.");			 
			 $("#fichero-pdf-alert").fadeIn();
			 $("#fichero-pdf-alert").css("display","block");
			 resultado_ok=false;
		}								
		return resultado_ok;		
	}
});

