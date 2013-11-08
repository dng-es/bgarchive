$(document).ready(function(){

  var bgarchive = {
    findTag : "",
    init : function(){
      $("#bg-def").dacolorpicker();
      $("#txt-red, #txt-green, #txt-blue, #txt-opacity").numeric();
      $("#box-content-search, #box-content-upload").hide(); 

      this.resizePanels();
      this.loadBackgrounds();
      this.bgColorChange();
    },
    loadBackgrounds : function(){
      $("#bg-loading").show();
      $("#container1-files").load("collection.php",{"ftag":this.findTag},function(){
          $("#bg-loading").hide();
      })       
    },
    resizePanels : function(){
      var wheight = $(window).height(),
          wwidth = $(window).width(); 
      $("#container1").css("height" , wheight - 23 + "px");
      $("#container2").css({"height" : wheight - 29 + "px", "width" : wwidth - 380});      
    },
    bgColorChange : function(){
      var bgColor = $("#bg-def").val(),
          link_bg = $("#app-download-custom").attr("href"),
          bg_red = 0, bg_green = 0, bg_blue = 0, bg_opacity = 1, l_new = "#";
      $("#bg-color-change, #container2-bg").css("background-color",bgColor);
      if (link_bg!="#"){
          bg_red = $("#txt-red").val();
          bg_green = $("#txt-green").val();
          bg_blue = $("#txt-blue").val();
          bg_opacity = $("#txt-opacity").val()/100;
          l_new = link_bg + "&r=" + bg_red + "&g=" + bg_green + "&b=" + bg_blue + "&o=" + bg_opacity;
          $("#app-download-custom").attr("href",l_new);
      }     
    },
    changeTxtColor : function(elem){
        var slidevalue = this.getColorSlide(elem),
            cColor = elem.attr("data-color");
        $( "#" + cColor ).slider( "value", slidevalue );
        $( "#" + cColor + " .ui-slider-range" ).css({"width" : slidevalue + "%"});      
    },
    getColorSlide : function(elem){
      var txtValue = elem.val();
      txtValue = txtValue == '' ? 0 : parseInt(txtValue);
      txtValue = txtValue > 255 ? 255 : txtValue
      elem.val(txtValue);
      return txtValue<=0 ? 0 : ((txtValue * 100)/255);      
    },
    hexToRgb : function(hex){
      var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
      return result ? { r: parseInt(result[1], 16), g: parseInt(result[2], 16), b: parseInt(result[3], 16) } : null;      
    },
    hexFromRGB : function(r, g, b){
      var hex = [r.toString( 16 ), g.toString( 16 ), b.toString( 16 )];
      $.each( hex, function( nr, val ) {
        if ( val.length === 1 ) {
          hex[ nr ] = "0" + val;
        }
      });
      return hex.join( "" ).toUpperCase();      
    },
    launchSearch : function(){
      this.findTag = jQuery.trim($("#search-text").val());
      this.loadBackgrounds();     
    },
    addDownload : function(trigger){
      var cont = parseInt($("#file-downs").html()) + 1,
          elem = '#' + trigger.attr("data-id");
      $(elem).attr("data-d",cont);
      $("#file-downs").html(cont);       
    }

  }

  bgarchive.init();


  $(window).resize(function() {
    bgarchive.resizePanels();
  });

  $(".box-legend").click(function(){
    $(this).next(".box-content").slideToggle(function(){
      $(".scroll-pane").jScrollPane({showArrows: true});
    });
  });  

  $("#bg-change").click(function(e){
    bgarchive.bgColorChange();
  });  

  $("#bg-def").keypress(function(e) {    
    if (e.which == 13) { 
        e.preventDefault();
        var colores = bgarchive.hexToRgb($(this).val());
        $("#txt-red").val(colores.r);
        $("#txt-green").val(colores.g);
        $("#txt-blue").val(colores.b);
        bgarchive.changeTxtColor($("#txt-red"));
        bgarchive.changeTxtColor($("#txt-green"));
        bgarchive.changeTxtColor($("#txt-blue"));
        slideChangeColor();        
      } 
  });

  $("#txt-red, #txt-green, #txt-blue").keyup(function(e){
    if (e.which == 13) {
      bgarchive.changeTxtColor($(this));
      slideChangeColor();
    }
  });

  $("#app-download, #app-download-custom").click(function(){
    bgarchive.addDownload($(this));  
  });   
  
  /*search functions*/
  $("#search-button").click(function(){
    bgarchive.launchSearch();
  });

  $("#search-text").keypress(function(e) {    
    if (e.which == 13) { 
      e.preventDefault();
      bgarchive.launchSearch();} 
  }); 

  $(".tags-cloud").click(function(e){
    e.preventDefault();
    bgarchive.findTag = $(this).attr("data-f");
    bgarchive.loadBackgrounds();    
  });

  $("#search-reset").click(function(e){
    e.preventDefault();
    bgarchive.findTag = "";
    bgarchive.loadBackgrounds();   
  });

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
    elem: this,
    slide: function(elem, ui){
      slideChangeColor(elem,ui.value)
    },
    change: function(elem, ui){
      slideChangeColor(elem,ui.value)
    },
    create: function(event, ui){
        ui.value= 255;
    }
  });
  $( "#red, #green, #blue" ).slider( "value", 0 );

  function slideChangeColor(event,uivalue){
    var red = $( "#red" ).slider( "option", "value" ),
        green = $( "#green" ).slider( "option", "value" ),
        blue = $( "#blue" ).slider( "option", "value" );
        
    red = red > 0 ? parseInt((red*255)/100) : 0;
    green = green > 0 ? parseInt((green*255)/100) : 0;
    blue = blue > 0 ? parseInt((blue*255)/100) : 0;     

    var hex = bgarchive.hexFromRGB( red, green, blue );
    $( "#swatch" ).css( "background-color", "#" + hex );
    $("#bg-def").attr("value","#" + hex );
    if (event!==undefined){
      $("#txt-" + event.target.id).attr("value", uivalue);
    }
    console.log(uivalue);
  }   
});