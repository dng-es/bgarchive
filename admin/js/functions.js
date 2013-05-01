// JavaScript Document
function Confirma(Mensaje,Destino)
{
        var respuesta=confirm(Mensaje);        
        if (respuesta==true)
                location.href=Destino;
}

function validateEmail(email)
{
// a very simple email validation checking. 
// you can add more complex email checking if it helps 
    if(email.length <= 0)
	{
	  return false;
	}
    var splitted = email.match('^(.+)@(.+)$');
    if(splitted == null) return false;
    if(splitted[1] != null )
    {
      var regexp_user=/^\'?[\w-_\.]*\'?$/;
      if(splitted[1].match(regexp_user) == null) return false;
    }
    if(splitted[2] != null)
    {
      var regexp_domain=/^[\w-\.]*\.[A-Za-z]{2,4}$/;
      if(splitted[2].match(regexp_domain) == null) 
      {
	    var regexp_ip =/^\[\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}\]$/;
	    if(splitted[2].match(regexp_ip) == null) return false;
      }// if
      return true;
    }
return false;
}

function esFechaValida(fecha){
    if (fecha != undefined && fecha.value != "" ){
		fecha=fecha.replace(/-/g,'/');
		var expreg = /^([0-9]{4})\/([0-9]{2})\/([0-9]{2})$/;
        if (!expreg.test(fecha)){
            return false;
        }
		var anio =  parseInt(fecha.substring(0,4));			
		var dia  =  fecha.substring(8,10);	
        var mes  =  fecha.substring(5,7);
		 
    switch(mes){
        case "01":
        case "03":
        case "05":
        case "07":
		case "08":
        case "10":
        case "12":
            numDias=31;
            break;
        case "04": case "06": case "09": case "11":
            numDias=30;
            break;
        case "02":
            if (comprobarSiBisisesto(anio)){ numDias=29 }else{ numDias=28};
            break;
        default:
            return false;
    }
 
        if (dia>numDias || dia==0){
            return false;
        }
        return true;
    }
}
 
function comprobarSiBisisesto(anio){
if ( ( anio % 100 != 0) && ((anio % 4 == 0) || (anio % 400 == 0))) {
    return true;
    }
else {
    return false;
    }
}


