// JavaScript Document
jQuery(document).ready(function(){
	HabilitarCombo();
	
	$("#form-submit").click(function(evento){
	   $(".alert-message").html("");
	   $(".alert-message").css("display","none");
	   
	   var resultado_ok=true;   
	   
	
		if (jQuery.trim($("#category_name").val())=="") 
		{
			 $("#nombre-alert").html("Debe el nombre de la categoria.");			 
			 $("#nombre-alert").fadeIn();
			 $("#nombre-alert").css("display","block");
			 resultado_ok=false;
		}
		if (jQuery.trim($("#category_page").val())=="") 
		{
			 $("#page-alert").html("Debe seleccionar una pagina.");			 
			 $("#page-alert").fadeIn();
			 $("#page-alert").css("display","block");
			 resultado_ok=false;
		}		

		if (resultado_ok==true) 
		{
			$("#formData").submit();
		}		
	});
	
	$('#id_parent').change(function() {
		HabilitarCombo();
	});
	
	function HabilitarCombo(){
		if($("#id_parent").val()==1){
	  		$("#selector_categoria").css("display","inline-block");
		}
		else{
			$("#selector_categoria").css("display","none");
		}		
	}
});

