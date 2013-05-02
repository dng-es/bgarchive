<?php
include_once("admin/includes/constants.php");
include_once("admin/includes/functions.php");
include_once("admin/includes/class.connection.php");
include_once("admin/includes/class.backgrounds.php");

chooseBox();

function chooseBox(){

        $backgrounds = new backgrounds();
        if (isset($_REQUEST['ftag']) and trim($_REQUEST['ftag'])!=""){
          //search option
          $tag=$_REQUEST['ftag'];
          $filter = " AND bg_tags like '%".$tag."%'  ORDER BY bg_date DESC ";
          $elements = $backgrounds->getBackgrounds($filter);
          $num_bg=count($elements);
        }        
        else{
          //default values
          $filter = " ORDER BY bg_date DESC ";
          $elements = $backgrounds->getBackgrounds($filter);
          $num_bg=$backgrounds->countReg("backgrounds","");
        }
        
         
        echo '<LINK rel="stylesheet" type="text/css" href="css/styles.css" />
              <script language="JavaScript" src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
              <script language="JavaScript" src="js/bgs.js"></script>
              <script type="text/javascript" src="js/jquery.dacolorpicker.min.js"></script>
              <!-- scroll -->
              <link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />
              <script type="text/javascript" src="js/jquery.mousewheel.js"></script>
              <script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>
              <script type="text/javascript" id="sourcecode">
              $(function()
              {
                  $(".scroll-pane").jScrollPane({showArrows: true});
              });
              </script>
              <!-- fin scroll -->';

        echo '<p>Found: '.$num_bg.' patterns</p>
              <div id="container2-files" class="scroll-pane">';

        foreach($elements as $element):
          $ext = strtoupper(substr($element['bg_file'], strrpos($element['bg_file'],".") + 1));
          $peso_archivo = filesize(PATH_PATTERNS.$element['bg_file']);
          echo '<a href="#" id="'.sha1($element['id_bg']).'" 
                            data-n="'.$element['bg_file'].'" 
                            data-s="'.FormatFileSize($peso_archivo).'" 
                            data-f="'.$ext.'" 
                            data-t="'.$element['bg_tags'].'" 
                            data-d="'.$element['bg_downloads'].'" 
                            data-l="'.$element['bg_license'].'" 
                            style="background-image:url('.PATH_PATTERNS.$element['bg_file'].')" class="bg-pattern"></a>';
        endforeach;
        echo '</div>';

}
?>