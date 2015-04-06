<?php
$page=$_GET["page"];

$isIe=!(isset($_SERVER['HTTP_USER_AGENT']) && (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== false || strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== false));

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<?php include('system/head_title.php');?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-language" content="cs" />
<meta name="description" content="Stránky Koupaliště Dolní Bukovina." />
<meta name="keywords" content="Koupaliste Dolni Bukovina, koupaliste, dolni bukovina, koupaní, mlada boleslav, u hrocha,
    areal koupaliste, koupaliste bukovina, mnichovo hradiste, bakov nad jizerou, ubytovani, stanovani, kemp, chatky" />
<meta name="author" content="Pavel Tregl" />

<link rel="stylesheet" type="text/css" media="all" href="styles/css/960.css" />
<link rel="stylesheet" type="text/css" media="all" href="styles/css/style.css" />
<!-- Start menu css and js files here -->
<link rel="stylesheet" type="text/css" href="styles/css/superfish.css" media="screen" />

<!--<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>-->
<script type="text/javascript" src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/superfish-1.7.5/dist/js/hoverIntent.js"></script>
<script type="text/javascript" src="js/superfish-1.7.5/dist/js/superfish.min.js"></script>
<script type="text/javascript">jQuery(function(){ jQuery('ul.sf-menu').superfish(); });</script>
<!-- End menu css and js files here -->

<!-- Begin featured slider css & js files -->
<?php 
  if (!$page) {
    echo('<link rel="stylesheet" type="text/css" media="all" href="styles/css/featuredslider.css" />');
    echo('<script type="text/javascript" src="js/script.js"></script>');
  }
?>
<!-- End featured slider css & js files -->

<!-- start prettyphoto lightbox css, js scripts -->
<?php 
  if ($page == "offer") {
    echo('<link rel="stylesheet" href="styles/css/prettyPhoto.css" type="text/css" media="screen" charset="utf-8" />');
    echo('<script type="text/javascript" src="js/jquery.prettyPhoto.js" charset="utf-8"></script>');
  }
?>
<!-- prettyphoto lightbox css, js scripts end -->

</head>
<body>

  <?php include('system/fb_left_edge.php');?>

  <div id="top"></div>
<?php 
  if (!$page) {
    echo('<div class="header"><div class="bg">');
  }else{
    echo('<div class="subbg"><div class="subheader">');
  }
?>
    <div class="container_16">
      <div class="grid_5">&nbsp;<!-- <img src="images/logo.png" alt="" class="pngfix logo"/> --> </div>
      
      <!-- menu -->
      <div class="grid_11">
          <?php include('system/top_menu.php');?>
      </div>
      
      <!-- slide show -->
      <?php 
            if (!$page) {
              echo('<div class="clear">&nbsp;</div>');
              include('system/slide_show.php');	
            }else{
              echo('<div class="grid_16"><div class="subtitle">');
              include('system/subtitles.php');
              echo('</div></div>');
            }
          ?>  
    </div>
  </div>
</div>

<!-- content -->
<div class="clear">&nbsp;</div>
<div class="container_16">
  <?php include('system/contents.php'); ?>
</div>

<!-- footer -->
<?php include('system/footer.php'); ?>   
</body>
</html>
