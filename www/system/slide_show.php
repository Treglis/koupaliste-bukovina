<div class="slider_bg pngfix">
  <ul id="slideshow">
    <?php
    $dir = "gallery/slideshow/";
    if (is_dir($dir)) {
      if ($dh = opendir($dir)) {
          while (($file = readdir($dh)) !== false) {
              if ($file != "." && $file != "..") {
                echo "<li><img src='$dir$file' alt='' /></li>";
              }
          }
          closedir($dh);
      }
    }
    ?>
  </ul>
  <div id="wrapper">
    <div id="fullsize">
      <!-- <div id="imgprev" class="imgnav pngfix"></div>
      <div id="imglink"></div>
      <div id="imgnext" class="imgnav pngfix"></div> -->
      <div id="image"></div>
      <div id="information">
        <h1>Areál koupaliště<br />
        <span style="color:#00919f; ">&quot;U Hrocha&quot; </span><span> Dolní Bukovina</span></h1>
        <p> - koupání - camp - chatky - občerstvení - </p>
      </div>
    </div>
    <div id="thumbnails">
      <div id="slideleft"></div>
      <div id="slidearea">
        <div id="slider"></div>
      </div>
      <div id="slideright"></div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $('slideshow').style.display='none';
  $('wrapper').style.display='block';
  var slideshow=new TINY.slideshow("slideshow");
  window.onload=function(){
  slideshow.auto=true;
  slideshow.speed=5;
  //slideshow.link="linkhover";
  //slideshow.info="information";
  slideshow.thumbs="slider";
  slideshow.left="slideleft";
  slideshow.right="slideright";
  slideshow.scrollSpeed=4;
  slideshow.spacing=5;
  slideshow.active="#aaa";
  //slideshow.init("slideshow","image","imgprev","imgnext", imglink");
  slideshow.init("slideshow","image");
  }
  </script>