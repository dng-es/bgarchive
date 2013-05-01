<?php

//DOWNLOAD FILE
if (isset($_REQUEST['d']) and is_file(PATH_PATTERNS.$_REQUEST['d'])){
  header ("Content-type: image/png");
  header('Content-Disposition: attachment; filename="'.$_REQUEST['d'].'"');
  readfile(PATH_PATTERNS.$_REQUEST['d']);
  $backgrounds = new backgrounds();
  $backgrounds->downloadBackground($_REQUEST['e']);
}


define('KEYWORDS_META_PAGE', $site_config[0]['SiteKeywords']);
define('SUBJECT_META_PAGE', $site_config[0]['SiteSubject']);
include_once("includes/class.footers.php");
function ini_page_header ($site_config) {?> 
<?php }
function ini_page_body ($site_config){
?>
    <div class="container" id="container1">
      <div class="box">
        <div class="box-legend">Search background by tag:</div>
        <div class="box-content">
          <p>Search brackground patterns by tag. E.g. transparent, black, geometrical, wood, ...</p>
          <form method="post" action="" name="search-form" id="search-form">
            <input type="text" name="search-text" id="search-text" class="app-text" value="<?php echo $_POST['search-text'];?>" />
            <input type="button" id="search-button" class="app-button" value="search file">
            <a href="?page=home" id="search-reset">reset filters</a>
          </form>
        </div>
      </div>
      <div class="box">
        <div class="box-legend">Choose background image:</div>
        <div class="box-content">
        <?php
        $backgrounds = new backgrounds();
        if (isset($_POST['search-text']) and trim($_POST['search-text'])!=""){
          //search option
          $tag = $_POST['search-text'];
          $filter = " AND bg_tags like '%".$tag."%'  ORDER BY bg_date DESC ";
          $elements = $backgrounds->getBackgrounds($filter);
          $num_bg=count($elements);
        }
        elseif (isset($_REQUEST['tag']) and trim($_REQUEST['tag'])!=""){
          //search option
          $tag=$_REQUEST['tag'];
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
        
         

        echo '<p>Found: '.$num_bg.' patterns</p>
              <div id="container1-files" class="scroll-pane">';

        foreach($elements as $element):
          $ext = strtoupper(substr($element['bg_file'], strrpos($element['bg_file'],".") + 1));
          $peso_archivo = filesize(PATH_PATTERNS.$element['bg_file']);
          echo '<a href="#" data-id="'.sha1($element['id_bg']).'" 
                            data-n="'.$element['bg_file'].'" 
                            data-s="'.FormatFileSize($peso_archivo).'" 
                            data-f="'.$ext.'" 
                            data-t="'.$element['bg_tags'].'" 
                            data-d="'.$element['bg_downloads'].'" 
                            data-l="'.$element['bg_license'].'" 
                            style="background-image:url('.PATH_PATTERNS.$element['bg_file'].')" class="bg-pattern"></a>';
        endforeach;
        ?>
        </div>
      </div>
      </div>

      <div class="box">
        <div class="box-legend">Tags: </div>
        <div class="box-content">
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=abstract">abstract</a>
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=animals">animals</a>
          <a class="tags-cloud tags-cloud5" href="?page=home&tag=black">black</a>
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=blue">blue</a>
          <a class="tags-cloud tags-cloud3" href="?page=home&tag=brown">brown</a>
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=bubbles">bubbles</a>
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=celtic">celtic</a>
          <a class="tags-cloud tags-cloud3" href="?page=home&tag=clothes">clothes</a>
          <a class="tags-cloud tags-cloud2" href="?page=home&tag=circles">circles</a>
          <a class="tags-cloud tags-cloud3" href="?page=home&tag=dots">dots</a>
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=flowers">flowers</a>
          <a class="tags-cloud tags-cloud4" href="?page=home&tag=geometrical">geometrical</a>
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=grass">grass</a>
          <a class="tags-cloud tags-cloud3" href="?page=home&tag=green">green</a>
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=grey">grey</a>
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=red">red</a>
          <a class="tags-cloud tags-cloud4" href="?page=home&tag=squares">squares</a>
          <a class="tags-cloud tags-cloud5" href="?page=home&tag=transparent">transparent</a>
          <a class="tags-cloud tags-cloud3" href="?page=home&tag=white">white</a>
          <a class="tags-cloud tags-cloud2" href="?page=home&tag=wood">wood</a>
          <a class="tags-cloud tags-cloud1" href="?page=home&tag=yellow">yellow</a>
        </div>
      </div>
    </div>
    <div class="container" id="container2">
      <div class="box">
        <div class="box-legend">Change background color:</div>
        <div class="box-content">
          <p>Try change color for transparent backgrounds. E. g. #FF0000, red, rgb(255,0,0), ...</p>
          <input type="text" id="bg-def" class="app-text" value="#ffffff" />
          <input type="button" id="bg-change" class="app-button" value="change color">
        </div>
      </div>

      <div class="box">
        <div class="box-legend">Preview background: </div>
        <div class="box-content">
          <div id="container2-legend">Selected file: </div>
          <div id="bg-color-change"></div>
          <div id="container2-bg"></div>
        </div>
      </div>
    </div>
<?php
}
?>