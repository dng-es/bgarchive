$(document).ready(function(){

  var bgarchive = {
    findTag : "",
    chkTransparent : $("#transparent"),
    txtRed : $("#txt-red"),
    txtGreen : $("#txt-green"),
    txtBlue : $("#txt-blue"),
    txtOpacity : $("#txt-opacity"),
    inputPicker : $("#bg-def"),
    init : function(){
      this.inputPicker.dacolorpicker();
      $("#txt-red, #txt-green, #txt-blue, #txt-opacity").numeric();
      $("#box-content-search, #box-content-upload, #box-content-tags").hide(); 

      this.resizePanels();
      this.loadBackgrounds();
      this.bgColorChange();
      this.bindEvents();
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
      var bgColor = this.inputPicker.val();
      this.chkTransparent.attr({"checked": false});
      $("#bg-color-change, #container2-bg").css("background-color",bgColor);
      $("#app-download-custom").attr({"data-r" : this.txtRed.val(), 
                                      "data-g" : this.txtGreen.val(),
                                      "data-b" : this.txtBlue.val(),
                                      "data-o" : this.txtOpacity.val()});     
    },
    changeTxtColor : function(elem){
        var slidevalue = this.getColorSlide(elem),
            cColor = elem.attr("data-color");
        $( "#" + cColor ).slider( "value", slidevalue ).slide;
        $( "#" + cColor + " .ui-slider-range" ).css({"width" : slidevalue + "%"}); 
    },
    changeTxtOpacity : function(){
        var slidevalue = this.getOpacitySlide();
        $( "#slider" ).slider( "value", slidevalue );
        $( "#slider .ui-slider-range" ).css({"width" : slidevalue + "%"});      
    },
    getColorSlide : function(elem){
      var txtValue = elem.val();
      txtValue = txtValue == '' ? 0 : parseInt(txtValue);
      txtValue = txtValue > 255 ? 255 : txtValue
      elem.val(txtValue);
      return txtValue<=0 ? 0 : ((txtValue * 100)/255);      
    },
    getOpacitySlide : function(){
      var txtValue = this.txtOpacity.val();
      txtValue = txtValue == '' ? 0 : parseInt(txtValue);
      txtValue = txtValue > 100 ? 100 : txtValue
      this.txtOpacity.val(txtValue);
      return txtValue<=0 ? 0 : ((txtValue * 100)/100);      
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
    },
    bindEvents : function(){

      this.chkTransparent.click(function(){
        if ( this.checked === true ){
          $("#container2-bg").css({"background":"transparent"});
         }   
      });

      this.txtOpacity.keyup(function(e){
        if (e.which == 13) {
          bgarchive.changeTxtOpacity();
        }
      });      

      $("#bg-change").click(function(e){
        bgarchive.bgColorChange();
      });  

      this.inputPicker.keypress(function(e) {    
        if (e.which == 13) {
            var colores = bgarchive.hexToRgb($(this).val());
            bgarchive.txtRed.val(colores.r);
            bgarchive.txtGreen.val(colores.g);
            bgarchive.txtBlue.val(colores.b);
            bgarchive.changeTxtColor(bgarchive.txtRed);
            bgarchive.changeTxtColor(bgarchive.txtGreen);
            bgarchive.changeTxtColor(bgarchive.txtBlue);
            slideChangeColor();        
          } 
      });  

      /*search events*/
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

  $("#txt-red, #txt-green, #txt-blue").keyup(function(e){
    if (e.which == 13) {
      bgarchive.changeTxtColor($(this));
      slideChangeColor();
    }
  });  

  $("#app-download, #app-download-custom").click(function(){
    bgarchive.addDownload($(this));  
  });   

  /*sliders*/
  $( "#slider" ).slider({
    value: 100,
    orientation: "horizontal",
    max: 100,
    min: 0,
    range: "min",
    value: 100,
    elem: this,
    slide: function(elem,ui){
      slideChangeOpacity(elem,ui.value)
    }
  });
  $( "#slider" ).slider("value", 100 ); 

  function slideChangeOpacity(event, uivalue){
    $("#container2-bg-image").css({ opacity: (uivalue)/100 });
    if (event!==undefined){
      $("#txt-opacity").val(uivalue);
      $("#app-download-custom").attr("data-o",uivalue);
    }
  }

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
      $("#txt-" + event.target.id).val(uivalue);
    }
  }   
   

  $("#app-download-custom").click(function(e){
    e.preventDefault();
    var bg_name = $(this).attr("data-n"),
        bg_id = $(this).attr("data-id"),
        bg_width = $(this).attr("data-w"),
        bg_height = $(this).attr("data-h"),
        bg_red = $(this).attr("data-r"),
        bg_green = $(this).attr("data-g"),
        bg_blue = $(this).attr("data-b"),
        bg_opacity = $(this).attr("data-o")/100,
        url = "?page=home&dc=" + bg_name + "&e=" + bg_id + "&w=" + bg_width + "&h=" + bg_height + "&r=" + bg_red + "&g=" + bg_green + "&b=" + bg_blue + "&o=" + bg_opacity;
    window.open(url);
  });
});