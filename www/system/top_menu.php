<?php
$classCurrent = "class='current'";
?>

<!-- menu -->
<div class="top-menu pngfix">
  <ul class="sf-menu">
    <li <?php if(!$page){echo($classCurrent);} ?>> <a href="index.php">Domů</a> </li>
    <!-- <li <?php if($page == "news"){echo($classCurrent);} ?>> <a href="index.php?page=news">Aktuality</a> </li>
    <li <?php if($page == "interest"){echo($classCurrent);} ?>> <a href="index.php?page=interest">Zajímavosti</a> </li> -->
    <li <?php if($page == "offer"){echo($classCurrent);} ?>> <a href="index.php?page=offer">Nabízíme</a></li>
    <!-- <li <?php if($page == "gallery"){echo($classCurrent);} ?>> <a href="index.php?page=gallery">Galerie</a>
      <ul>
        <li><a href="index.php?page=gallery&place=pool">Koupaliště</a></li>
        <li><a href="index.php?page=gallery&place=surround">Okolí</a></li>
        <li><a href="index.php?page=gallery&place=food">Občerstvení</a></li>
        <li><a href="index.php?page=gallery&place=cabin">Chatky</a></li>
        <li><a href="index.php?page=gallery&place=playground">Hřiště</a></li>
      </ul>
    </li> -->
    <li <?php if($page == "pricelist"){echo($classCurrent);} ?>> <a href="index.php?page=pricelist">Ceník</a> </li>
    <li <?php if($page == "rules"){echo($classCurrent);} ?>> <a href="index.php?page=rules">Návštěvní/provozní řád</a> </li>
    <li <?php if($page == "contact"){echo($classCurrent);} ?>> <a href="index.php?page=contact">Kontakty</a> </li>
  </ul>
  <span class="rightcorner pngfix"></span> </div>