$(document).ready(function(){

  $("#cpicker-bg").dacolorpicker({idDestino: "bg-def"});
  
  resizePanels();
  loadBackgrounds("")
  bgColorChange();
  

  $(window).resize(function() {
    resizePanels();
  });

  $(".box-legend").click(function(){
    $(this).next(".box-content").slideToggle();
  });

  $("#bg-change").click(function(e){
    bgColorChange();
  });  

  $("#bg-def").keypress(function(e) {    
    if (e.which == 13) { 
        e.preventDefault();
        bgColorChange();} 
  }); 

  function resizePanels(){
    var wheight = $(document).height(),
        wwidth = $(document).width(); 
    $("#container1").css("height",wheight-24);
    $("#container2").css({"height":wheight-29,"width":wwidth-330});
  }
  function bgColorChange(){
    var bgColor = $("#bg-def").val();
    $("#bg-color-change").css("background-color",bgColor);
    $("#container2-bg").css("background-color",bgColor);
  }    



  $("#app-download").click(function(){
    var cont = parseInt($("#file-downs").html()) + 1,
        elem = '#' + $(this).attr("data-id");
    $(elem).attr("data-d",cont);
    $("#file-downs").html(cont);  
  });
  

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
    if (jQuery.trim($("#search-text").attr("value"))!=""){
      var f_tag = jQuery.trim($("#search-text").attr("value"));
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

});