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
          $tags = explode(",", $tag);
          $filter = "";
          foreach ($tags as $tags_elem):
            $filter .= " AND bg_tag like '%".$tags_elem."%'  ";
          endforeach;
          
          //$elements = $backgrounds->getBackgrounds($filter);
          $elements = $backgrounds->getBackgroundsByTag($filter);
          $num_bg=count($elements);
        }        
        else{
          //default values
          $filter = " ORDER BY bg_date DESC ";
          $elements = $backgrounds->getBackgrounds($filter);
          $num_bg=$backgrounds->countReg("backgrounds","");
        }
        
         
        echo '<LINK rel="stylesheet" type="text/css" href="css/styles.css" />
              <script language="JavaScript" src="js/jquery.js"></script>
              <script language="JavaScript" src="js/collection.js"></script>
              <script type="text/javascript" src="js/jquery.dacolorpicker.min.js"></script>
              <script language="JavaScript" src="js/jquery-ui-1.10.2.custom.min.js"></script>
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
          $size = GetImageSize(PATH_PATTERNS.$element['bg_file']);
          $bg_width=$size[0];
          $bg_height=$size[1]; 
          $bg_tag = $backgrounds->getTagsById($element['id_bg']);
          $bg_tag_bg="";
          foreach ($bg_tag as $bg_tag_elem):
            $bg_tag_bg .= $bg_tag_elem['bg_tag'].", ";
          endforeach;
          $bg_tag_bg  = substr($bg_tag_bg, 0, strlen($bg_tag_bg)-2);
          echo '<a href="#" id="'.sha1($element['id_bg']).'" 
                            data-n="'.$element['bg_file'].'" 
                            data-s="'.FormatFileSize($peso_archivo).'" 
                            data-f="'.$ext.'" 
                            data-t="'.$bg_tag_bg.'" 
                            data-d="'.$element['bg_downloads'].'" 
                            data-l="'.$element['bg_license'].'" 
                            data-w="'.$bg_width.'" 
                            data-h="'.$bg_height.'" 
                            style="background-image:url('.PATH_PATTERNS.$element['bg_file'].')" class="bg-pattern"></a>';
        endforeach;
        echo '</div>';

}
?>