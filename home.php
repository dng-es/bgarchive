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
    <div class="container scroll-pane" id="container1"> 
      <?php changeBox();?>
      <?php opacityBox();?>
      <?php chooseBox();?>
      <?php uploadBox();?>
      <?php searchBox();?>
      <?php tagsBox();?>
    </div>
    <div class="container" id="container2">
      <h1>bgarchive
        <span>Choose a pattern, change the background color and download the file!.</span></h1>
      <?php previewBox();?>
    </div>
<?php
}

function uploadBox(){
  ?>
<div class="box">
        <div class="box-legend"><h2>Background upload</h2></div>
        <div class="box-content">
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
        <div class="box-legend"><h2>Background search</h2></div>
        <div class="box-content">
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
        <div class="box-legend"><h2>Background image</h2></div>
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

function tagsBox(){
  ?>
      <div class="box">
        <div class="box-legend"><h2>Background tags</h2></div>
        <div class="box-content">
          <a class="tags-cloud tags-cloud1" href="#" data-f="abstract">abstract</a>
          <a class="tags-cloud tags-cloud1" href="#" data-f="animals">animals</a>
          <a class="tags-cloud tags-cloud5" href="#" data-f="black">black</a>
          <a class="tags-cloud tags-cloud1" href="#" data-f="blue">blue</a>
          <a class="tags-cloud tags-cloud3" href="#" data-f="brown">brown</a>
          <a class="tags-cloud tags-cloud1" href="#" data-f="bubbles">bubbles</a>
          <a class="tags-cloud tags-cloud1" href="#" data-f="celtic">celtic</a>
          <a class="tags-cloud tags-cloud3" href="#" data-f="clothes">clothes</a>
          <a class="tags-cloud tags-cloud2" href="#" data-f="circles">circles</a>
          <a class="tags-cloud tags-cloud3" href="#" data-f="dots">dots</a>
          <a class="tags-cloud tags-cloud1" href="#" data-f="flowers">flowers</a>
          <a class="tags-cloud tags-cloud4" href="#" data-f="geometrical">geometrical</a>
          <a class="tags-cloud tags-cloud1" href="#" data-f="grass">grass</a>
          <a class="tags-cloud tags-cloud3" href="#" data-f="green">green</a>
          <a class="tags-cloud tags-cloud1" href="#" data-f="grey">grey</a>
          <a class="tags-cloud tags-cloud1" href="#" data-f="red">red</a>
          <a class="tags-cloud tags-cloud4" href="#" data-f="squares">squares</a>
          <a class="tags-cloud tags-cloud5" href="#" data-f="transparent">transparent</a>
          <a class="tags-cloud tags-cloud3" href="#" data-f="white">white</a>
          <a class="tags-cloud tags-cloud2" href="#" data-f="wood">wood</a>
          <a class="tags-cloud tags-cloud1" href="#" data-f="yellow">yellow</a>
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
              <img src="images/cpicker.png" name="cpicker-bg" id="cpicker-bg" class="cpicker">
            </div>
            
            <p>RGB:</p>
            <div class="slider-container">
              <div id="red" class="slider"></div>
              <input type="text" class="app-text app-text-mini" name="txt-red" id="txt-red" value="255" />
            </div>
            <div class="slider-container">
              <div id="green" class="slider"></div>
              <input type="text" class="app-text app-text-mini" name="txt-green" id="txt-green" value="255" />
            </div>
            <div class="slider-container">
              <div id="blue" class="slider"></div>  
              <input type="text" class="app-text app-text-mini" name="txt-blue" id="txt-blue" value="255" />             
            </div>  
          </div>
        </div>
      </div>
  <?php
}

function opacityBox(){
  ?>
      <div class="box">
        <div class="box-legend"><h2>Background opacity</h2></div>
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
      <div class="box">
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
            <div class="container2-legend-info container2-legend-info2">
              <a data-id="0" class='app-button' id='app-download' href='#'>download original file</a>
              <a data-id="1" class='app-button' id='app-download-custom' href='#'>download custom file</a>
            </div>            
            <div id="bg-color-change" class="ui-corner-all"></div>
          </div>
          <div id="container2-bg"><div id="container2-bg-image"></div></div>
        </div>
      </div>
  <?php
}
?>