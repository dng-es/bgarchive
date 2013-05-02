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
      <?php changeBox();?>
      <?php chooseBox();?>
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

function searchBox(){
  ?>
<div class="box">
        <div class="box-legend"><h2>Search background by tag</h2></div>
        <div class="box-content">

          <form method="post" action="" name="search-form" id="search-form">
            <input type="text" name="search-text" id="search-text" class="app-text" value="<?php echo $_POST['search-text'];?>" />
            <input type="button" id="search-button" class="app-button" value="search file">
            <a href="#" id="search-reset">reset filters</a>
          </form>
        </div>
      </div>
  <?php
}

function chooseBox(){
  ?>
      <div class="box">
        <div class="box-legend"><h2>Choose background image</h2></div>
        <div class="box-content">
          <div id="container1-files">
            <div id="bg-loading"><img src="images/loading.gif" border="0" /></div>
          </div>
        </div>
      </div>
  <?php
}

function tagsBox(){
  ?>
      <div class="box">
        <div class="box-legend"><h2>Tags</h2></div>
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
        <div class="box-legend"><h2>Change background color</h2></div>
        <div class="box-content">
          <div class="app-text-container">
            <input type="text" id="bg-def" class="app-text-none" value="#ffffff" />
            <img src="images/cpicker.png" name="cpicker-bg" id="cpicker-bg" class="cpicker">
          </div>
          <input type="button" id="bg-change" class="app-button" value="change">
        </div>
      </div>
  <?php
}
function previewBox(){
  ?>
      <div class="box">
        <div class="box-legend"><h2>Preview background</h2></div>
        <div class="box-content">
          <div id="container2-legend">
            <a data-id="0" class='app-button' id='app-download' href='#'>download file</a> (<span id="file-size">0 kb</span>)<br />
            Format: <span id="file-format">format</span><br />
            Downloads: <span id="file-downs">0</span><br />
            License: <span id="file-license">0</span><br />
            Tags: <span id="file-tags">0</span>
          </div>
          <div id="bg-color-change"></div>
          <div id="container2-bg"></div>
        </div>
      </div>
  <?php
}
?>