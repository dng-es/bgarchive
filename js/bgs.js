$(document).ready(function(){

  bgImageChange($(".bg-pattern:first"));

  $(".bg-pattern").click(function(e){
    e.preventDefault();
    bgImageChange($(this));
  });
  
  function bgImageChange(pattern){
    $(".bg-pattern").removeClass("bg-pattern-selected");
    pattern.addClass("bg-pattern-selected");
    var bg_id = pattern.attr("id");
    var bg_name = pattern.attr("data-n");
    var bg_size = pattern.attr("data-s");
    var bg_format = pattern.attr("data-f");
    var bg_downloads = pattern.attr("data-d");
    var bg_tags = pattern.attr("data-t");
    var bg_license = pattern.attr("data-l");
    $("#container2-bg").css("background-image","url(data/patterns/"+bg_name+")");
    $("#app-download").attr("href","?page=home&d=" + bg_name + "&e=" + bg_id);
    $("#app-download").attr("data-id",bg_id);
    $("#file-size").html(bg_size);
    $("#file-format").html(bg_format);
    $("#file-downs").html(bg_downloads);
    $("#file-license").html(bg_license);
    $("#file-tags").html(bg_tags);
  }  

});