$(document).ready(function(){
  $("#cpicker-bg").dacolorpicker({triggerDest: "bg-def"});
  $("#txt-red, #txt-green, #txt-blue").numeric();
  
  resizePanels();
  loadBackgrounds("");
  bgColorChange();

  $(window).resize(function() {
    resizePanels();
  });

  function resizePanels(){
    var wheight = $(window).height(),
        wwidth = $(window).width(); 
    $("#container1").css("height",wheight-23 + "px");
    $("#container2").css({"height":wheight-29 + "px","width":wwidth-380});
  }  

  $(".box-legend").click(function(){
    $(this).next(".box-content").slideToggle();
  });  

  $("#bg-change").click(function(e){
    bgColorChange();
  });  

  $("#bg-def").keypress(function(e) {    
    if (e.which == 13) { 
        e.preventDefault();
        //bgColorChange();
        var colores = hexToRgb($(this).val());
        $("#txt-red").val(colores.r);
        $("#txt-green").val(colores.g);
        $("#txt-blue").val(colores.b);
        changeTxtColor($("#txt-red"),"red");
        changeTxtColor($("#txt-green"),"green");
        changeTxtColor($("#txt-blue"),"blue");
        slideChangeColor();        
      } 
  });

  $("#app-download").click(function(){
    addDownload($(this));  
  });

  $("#app-download-custom").click(function(){
    addDownload($(this));  
  });  

  function addDownload(trigger){
    var cont = parseInt($("#file-downs").html()) + 1,
        elem = '#' + trigger.attr("data-id");
    $(elem).attr("data-d",cont);
    $("#file-downs").html(cont);  
  }  
  
  /*search functions*/
  $("#search-button").click(function(){
    launchSearch();
  });

  $("#search-text").keypress(function(e) {    
    if (e.which == 13) { 
      e.preventDefault();
      launchSearch();} 
  }); 

  function launchSearch(){
    if (jQuery.trim($("#search-text").val())!=""){
      var f_tag = jQuery.trim($("#search-text").val());
      loadBackgrounds(f_tag);
      return false;
    }
    return false;
  }

  $(".tags-cloud").click(function(e){
    e.preventDefault();
    var f_tag = $(this).attr("data-f");
    loadBackgrounds(f_tag);    
  });

  $("#search-reset").click(function(e){
    e.preventDefault();
    loadBackgrounds("");    
  });

  function loadBackgrounds(ftag){
   $("#bg-loading").show();
   $("#container1-files").load("collection.php",{"ftag":ftag},function(){
       $("#bg-loading").hide();
     })
  }

  /*sliders*/
  $( "#slider" ).slider({
    value: 100,
    orientation: "horizontal",
    max: 100,
    min: 0,
    range: "min",
    slide: function(event, ui){
       $("#container2-bg-image").css({ opacity: (ui.value)/100 });
       $("#txt-opacity").attr("value",(ui.value));
    }
  });
  $( "#slider" ).slider("value", 100 ); 

  $( "#red, #green, #blue" ).slider({
    orientation: "horizontal",
    range: "min",
    max: 255,
    value: 0,
    slide: slideChangeColor,
    change: slideChangeColor,
    create: function(event, ui){
        ui.value= 255;
    }
  });

  $( "#red, #green, #blue" ).slider( "value", 0 );

  //var red = 255, green = 255, blue = 255;

  function slideChangeColor(){
    var red = $( "#red" ).slider( "option", "value" ),
        green = $( "#green" ).slider( "option", "value" ),
        blue = $( "#blue" ).slider( "option", "value" );
        
    red = red > 0 ? parseInt((red*255)/100) : 0;
    green = green > 0 ? parseInt((green*255)/100) : 0;
    blue = blue > 0 ? parseInt((blue*255)/100) : 0;     

    $("#txt-red").val(red);
    $("#txt-green").val(green);
    $("#txt-blue").val(blue);

    var hex = hexFromRGB( red, green, blue );
    $( "#swatch" ).css( "background-color", "#" + hex );
    $("#bg-def").attr("value","#" + hex )
  }  

  function changeTxtColor(elem,cColor){
        var slidevalue = getColorSlide(elem);
        $( "#" + cColor ).slider( "value", slidevalue );
        $( "#" + cColor + " .ui-slider-range" ).css({"width" : slidevalue + "%"});
  }

  function getColorSlide(elem){
      var txtValue = elem.val();
      if (txtValue=='') {txtValue = 0;}
      if (txtValue>255) {txtValue = 255;}

      txtValue = parseInt(txtValue);
      elem.val(txtValue);
      return txtValue<=0 ? 0 : ((txtValue * 100)/255);
  }

  function bgColorChange(){
    var bgColor = $("#bg-def").val();
    $("#bg-color-change").css("background-color",bgColor);
    $("#container2-bg").css("background-color",bgColor);
  }  

  function hexToRgb(hex) {
      var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
      return result ? {
          r: parseInt(result[1], 16),
          g: parseInt(result[2], 16),
          b: parseInt(result[3], 16)
      } : null;
  } 

  function hexFromRGB(r, g, b) {
    var hex = [
      r.toString( 16 ),
      g.toString( 16 ),
      b.toString( 16 )
    ];
    $.each( hex, function( nr, val ) {
      if ( val.length === 1 ) {
        hex[ nr ] = "0" + val;
      }
    });
    return hex.join( "" ).toUpperCase();
  }   

  $("#txt-red").keyup(function(){
        changeTxtColor($(this),"red");
        slideChangeColor();
  });

  $("#txt-green").keyup(function(){
        changeTxtColor($(this),"green");
        slideChangeColor();
  });

  $("#txt-blue").keyup(function(){
        changeTxtColor($(this),"blue");
        slideChangeColor();
  });
});