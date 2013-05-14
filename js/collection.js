$(document).ready(function(){
  $( "#red, #green, #blue" ).slider();
  bgImageChange($(".bg-pattern:first"));

  $(".bg-pattern").click(function(e){
    e.preventDefault();
    bgImageChange($(this));
  });
  
  function bgImageChange(pattern){
    $(".bg-pattern").removeClass("bg-pattern-selected");
    pattern.addClass("bg-pattern-selected");
    var bg_id = pattern.attr("id"),
        bg_name = pattern.attr("data-n"),
        bg_size = pattern.attr("data-s"),
        bg_format = pattern.attr("data-f"),
        bg_downloads = pattern.attr("data-d"),
        bg_tags = pattern.attr("data-t"),
        bg_license = pattern.attr("data-l"),
        bg_width = pattern.attr("data-w"),
        bg_height = pattern.attr("data-h");
    $("#container2-bg-image").css("background-image","url(data/patterns/"+bg_name+")");
    $("#app-download").attr("href","?page=home&d=" + bg_name + "&e=" + bg_id)
                      .attr("data-id",bg_id);
    $("#file-size").html(bg_size);
    $("#file-format").html(bg_format);
    $("#file-downs").html(bg_downloads);
    $("#file-license").html(bg_license);
    $("#file-tags").html(bg_tags);
    $("#file-width").html(bg_width);
    $("#file-height").html(bg_height);
  }
});