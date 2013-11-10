<?php

//DOWNLOAD ORIGINAL FILE
if (isset($_REQUEST['d']) and is_file(PATH_PATTERNS.$_REQUEST['d'])){
  $mimetype = mm_type(PATH_PATTERNS.$_REQUEST['d']);
  header ("Content-type: $mimetype");
  header('Content-Disposition: attachment; filename="'.$_REQUEST['d'].'"');
  readfile(PATH_PATTERNS.$_REQUEST['d']);
  $backgrounds = new backgrounds();
  $backgrounds->downloadBackground($_REQUEST['e']);
}

//DOWNLOAD CUSTOM FILE
if (isset($_REQUEST['dc']) and is_file(PATH_PATTERNS.$_REQUEST['dc'])){
  $mimetype = mm_type(PATH_PATTERNS.$_REQUEST['dc']);
  //echo $_REQUEST['dc']." - ".$_REQUEST['r']." - ".$_REQUEST['g']." - ".$_REQUEST['b']." - ".$_REQUEST['w']." - ".$_REQUEST['h']." - ".$_REQUEST['o'];
  $new_bg = createBg($_REQUEST['dc'],$_REQUEST['r'],$_REQUEST['g'],$_REQUEST['b'],$_REQUEST['w'],$_REQUEST['h'],$_REQUEST['o']);
  // header ("Content-type: $mimetype");
  // header('Content-Disposition: attachment; filename="'.$new_bg.'"');
  // readfile(PATH_PATTERNS_TEMP.$new_bg);
  // $backgrounds = new backgrounds();
  // $backgrounds->downloadBackground($_REQUEST['e']);
}


define('KEYWORDS_META_PAGE', $site_config[0]['SiteKeywords']);
define('SUBJECT_META_PAGE', $site_config[0]['SiteSubject']);
include_once("includes/class.footers.php");
function ini_page_header ($site_config) {?> 
<?php }
function ini_page_body ($site_config){
?>
    <div class="container scroll-pane" id="container1"> 
      <?php changeBox();?>     
      <?php chooseBox();?>
      <?php opacityBox();?>
      <?php uploadBox();?>
      <?php searchBox();?>
      <?php tagsBox();?>
    </div>
    <div class="container" id="container2">
      <h1>bgarchive</h1>
      <ul>
        <li>{ Step1 } : Choose a pattern, or upload one.</li>
        <li>{ Step2 } : Change the background.</li>
        <li>{ Step3 } : Change pattern opacity.</li>
        <li>{ Step4 } : Choose download original file or custom file!.</li>
      </ul>
      <?php previewBox();?>
    </div>
<?php
}

function uploadBox(){
  ?>
<div class="box">
        <div class="box-legend"><h2>Background pattern upload</h2></div>
        <div class="box-content" id="box-content-upload">
          <p>Allowed formats: GIF, PNG, JPG</p>
          <form method="post" action="" name="upload-form" id="upload-form" method="post" enctype="multipart/form-data">
            <input type="text" name="upload-text" id="upload-text" class="app-text" value="" />
            <input type="button" id="upload-button" class="app-button" value="upload file">
          </form>
        </div>
      </div>
  <?php
}

function searchBox(){
  ?>
<div class="box">
        <div class="box-legend"><h2>Background pattern search</h2></div>
        <div class="box-content" id="box-content-search">
          <form method="post" action="" name="search-form" id="search-form">
            <input type="text" name="search-text" id="search-text" class="app-text" value="<?php echo $_POST['search-text'];?>" />
            <input type="button" id="search-button" class="app-button" value="search file">
            <p><a href="#" id="search-reset">reset filters</a></p>
          </form>
        </div>
      </div>
  <?php
}

function chooseBox(){
  ?>
      <div class="box">
        <div class="box-legend"><h2>Background pattern</h2></div>
        <div class="box-content">
          <div id="container1-files">
            <div id="bg-loading"><img id="bg-loading-img" src="images/loading.gif" border="0" />
              <p>Loading patterns ...</p>
            </div>
          </div>
        </div>
      </div>
  <?php
}

function _getNumber($details) {
  return $details['QTD_TAG'];
}

function tagsBox(){
  ?>
      <div class="box">
        <div class="box-legend"><h2>Background pattern tags</h2></div>
        <div class="box-content" id="box-content-tags">
          <?php
          $backgrounds = new backgrounds();
          $bg_tags = $backgrounds->getTagCloud();
          $numbers = array_map('_getNumber', $bg_tags);
          $max = max($numbers);

          foreach ($bg_tags as $bg_tag):
            $cloud_level = $bg_tag['QTD_TAG'] * 100 / $max;
            if ($cloud_level>=80){ $cloud_class="tags-cloud5";}
            elseif ($cloud_level>=60){ $cloud_class="tags-cloud4";}
            elseif ($cloud_level>=40){ $cloud_class="tags-cloud3";}
            elseif ($cloud_level>=20){ $cloud_class="tags-cloud2";}
            else{ $cloud_class="tags-cloud1";}

            echo '<a class="tags-cloud '.$cloud_class.'" href="#" data-f="'.$bg_tag['bg_tag'].'">'.
                  $bg_tag['bg_tag'].'</a>';
          endforeach;
          ?>
        </div>
      </div>
  <?php
}

function changeBox(){
  ?>
      <div class="box">
        <div class="box-legend"><h2>Background color</h2></div>
        <div class="box-content">
          <div id="swatch-content">
            <div id="swatch" class="ui-widget-content ui-corner-all"></div>
            <input type="button" id="bg-change" class="app-button" value="apply">
          </div>
          <div id="colors-content">
            <p>Hexadecimal:</p>
            <div class="app-text-container">
              <input type="text" id="bg-def" class="app-text-none" value="#000000" />
            </div>
            
            <p>RGB:</p>
            <div class="slider-container">
              <div id="red" class="slider"></div>
              <input type="text" class="app-text app-text-mini" name="txt-red" data-color="red" id="txt-red" value="255" />
            </div>
            <div class="slider-container">
              <div id="green" class="slider"></div>
              <input type="text" class="app-text app-text-mini" name="txt-green" data-color="green" id="txt-green" value="255" />
            </div>
            <div class="slider-container">
              <div id="blue" class="slider"></div>  
              <input type="text" class="app-text app-text-mini" name="txt-blue" data-color="blue" id="txt-blue" value="255" />             
            </div>
            <p style="clear:both"><input type="checkbox" name="transparent" id="transparent" /> 
            <label for="transparent">Transparent</label></p>  
          </div>
        </div>
      </div>
  <?php
}

function opacityBox(){
  ?>
      <div class="box">
        <div class="box-legend"><h2>Background pattern opacity</h2></div>
        <div class="box-content">
          <div class="slider-container">
            <p>Change pattern opacity:</p>
            <div id="slider" class="slider"></div>
            <input type="text" class="app-text app-text-mini" name="txt-opacity" id="txt-opacity" value="100" />
          </div>
        </div>
      </div>
  <?php
}

function previewBox(){
  ?>
      <div class="box box-center">
        <div class="box-legend"><h2>Background preview</h2></div>
        <div class="box-content">
          <div id="container2-legend">
            <div class="container2-legend-info">
              <span class="container2-legend-info-title">Downloads:</span> <span id="file-downs">0</span><br />
              <span class="container2-legend-info-title">Format:</span> <span id="file-format">format</span><br />
              <span class="container2-legend-info-title">Size:</span> <span id="file-size">0 kb</span>      
            </div>
            <div class="container2-legend-info">
              <span class="container2-legend-info-title">Width:</span> <span id="file-width">0</span> px<br />
              <span class="container2-legend-info-title">Height:</span> <span id="file-height">0</span> px
            </div>
            <div class="container2-legend-info container2-legend-info2">
              <span class="container2-legend-info-title">License:</span> <span id="file-license">0</span><br />
              <span class="container2-legend-info-title">Tags:</span> <span id="file-tags">0</span>
            </div>
            <div class="container2-legend-info container2-legend-info3">
              <a data-id="0" class='app-button2' id='app-download' href='#'><span class="icon-kub-download icon-app-button2"></span> download original file</a>
              <a data-id="1" data-r="0" data-g="0" data-b="0" data-o="100" class='app-button2' id='app-download-custom' target="_blank" href='#'><span class="icon-kub-download icon-app-button2"></span> download custom file</a>
            </div>            
            <div id="bg-color-change" class="ui-corner-all" data-r="0" data-g="0" data-b="0"></div>
          </div>
          <div id="container2-bg-transparent">
            <div id="container2-bg"><div id="container2-bg-image"></div></div>
          </div>
        </div>
      </div>
  <?php
}
?>