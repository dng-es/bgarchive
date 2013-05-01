$(document).ready(function(){
  
  bgColorChange();
  bgImageChange($(".bg-pattern:first"));

  $(".bg-pattern").click(function(e){
    e.preventDefault();
    bgImageChange($(this));
  });

  $("#bg-change").click(function(e){
    bgColorChange();
  });  

  $("#bg-def").keypress(function(e) {    
    if (e.which == 13) { 
        e.preventDefault();
        bgColorChange();} 
  }); 
  function bgColorChange(){
    var bgColor = $("#bg-def").val();
    $("#bg-color-change").css("background-color",bgColor);
    $("#container2-bg").css("background-color",bgColor);
  }    

  function bgImageChange(pattern){
    $(".bg-pattern").removeClass("bg-pattern-selected");
    pattern.addClass("bg-pattern-selected");
    var bg_id = pattern.attr("data-id");
    var bg_name = pattern.attr("data-n");
    var bg_size = pattern.attr("data-s");
    var bg_format = pattern.attr("data-f");
    var bg_downloads = pattern.attr("data-d");
    var bg_tags = pattern.attr("data-t");
    var bg_license = pattern.attr("data-l");
    $("#container2-bg").css("background-image","url(data/patterns/"+bg_name+")");
    $("#container2-legend").html("<a class='app-button app-download' href='?page=home&d=" + bg_name + "&e=" + bg_id + "'>download file</a> (" + bg_size + ")<br />Format: " + bg_format + "<br />Downloads: " + bg_downloads + "<br />License: " + bg_license + "<br />Tags: " + bg_tags);
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
    if (jQuery.trim($("#search-text").attr("value"))!=""){
      $("#search-form").submit();
    }
    return false;
  }

});