<?php
    $showGallery = 'Zobrazit galerii';
    $hideGallery = 'Skrýt galerii';

    function getImagesOfFolder($dir, $excludedFileName){
        $images = array();
        if (is_dir($dir)) {
          if ($dh = opendir($dir)) {
              while (($file = readdir($dh)) !== false) {
                  if ($file != "." && $file != ".." && !strpos($file, '_min.') && $file != $excludedFileName) {
                    array_push($images, $dir.'/'.$file);
                  }
              }
              closedir($dh);
          }
        }
        return $images;
    }
    
    function getMinImage($file){
        return substr_replace($file, '_min', strpos($file,"."), 0);
    }
    
    function printPrettyPhotoLinks($dir, $name, $excludedImgName){
        
        $images = getImagesOfFolder($dir, $excludedImgName);
        $images = array_filter($images);

        if(!empty($images)){
          echo('<div class="link" name="showHide">'.$GLOBALS['showGallery'].'</div>'); 
          echo('<ul class="gallery clearfix">');
          foreach ($images as $image) {
            echo('<li> <a href="'.$image.'" rel="prettyPhoto['.$name.']" > <img src="'.getMinImage($image).'" alt="" /> </a> </li>');
          }
          echo('</ul>');
          echo('<br clear="all" />');
        }
    }        
?>


<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){ $("a[rel^='prettyPhoto']").prettyPhoto(); });
  
  $(document).ready(function(){$('div[name=showHide]').click(function(e){
      if($(this).text() == '<?php echo($showGallery);?>'){
        $(this).parent().find('.gallery').css('display', 'inline');
        $(this).text('<?php echo($hideGallery);?>');
      }else{
        $(this).parent().find('.gallery').css('display', 'none');
        $(this).text('<?php echo($showGallery);?>');
      }
  });
  });
  
</script>


<div class="offer">
  
  <?php 
    $part = 'pool';
    $mainImgName = 'koupani.JPG';
    $mainImgPath = 'gallery/koupaliste';
    $mainImg = $mainImgPath.'/'.$mainImgName;  
  ?>
  
  <div id="<?php echo($part); ?>" class="part">
    <div class="title">Koupání<span class="toTop rightalign"><a href="#top">&nbsp;&nbsp;&nbsp;</a></span></div>
    <div>
      <?php echo('<div class="image"><a href="'.$mainImg.'" rel="prettyPhoto['.$part.']" ><img src="'.getMinImage($mainImg).'" alt="Koupaliště"> </a></div>');?>
      <div  class="text">
      Koupaliště je betonová nádrž o rozměrech 100 x 90 m a hloubce 0 až 3 m.
      <br /><br /> 
      Rodiče s dětmi uvítají rozsáhlé brouzdalistě a velmi pozvolný vstup do vody. 
      <br /><br />
      Okolo nádrže je travnatá plocha s lavičkami. 
      Ti, kteří nevyhledávají celodenní pobyt na sluníčku, mají možnost si své místo najít pod stromem.
      </div>
    </div>
    <div class="clear"></div>
    
    <?php
        printPrettyPhotoLinks($mainImgPath, $part, $mainImgName);  
    ?>
    
  </div>
  
  <?php 
    $part = 'food';
    $mainImgName = 'stanek.JPG';
    $mainImgPath = 'gallery/obcerstveni';
    $mainImg = $mainImgPath.'/'.$mainImgName;  
  ?>
  
  <div id="<?php echo($part); ?>" class="part">
    <div class="title">Občerstvení<span class="toTop rightalign"><a href="#top">&nbsp;&nbsp;&nbsp;</a></span></div>
    <div>
      <?php echo('<div class="image"><a href="'.$mainImg.'" rel="prettyPhoto['.$part.']" ><img src="'.getMinImage($mainImg).'" alt="Stánky"> </a></div>');?>
      <div class="text">
      V areálu jsou umístěny 4 stánky s rychlým občerstvením (točené pivo, alkoholické i nealkoholické nápoje, teplé nápoje,  
      tabákové výrobky, teplá smažená jídla, cukrovinky, nanuky a točená zmrzlina.
      <br /><br />
      200m od areálu je penzion Naveta s restaurací, možností poledního menu a vaření minutek.
      <br /><br /> 
      Od 1.7.do 31.8. úterky, čtvrtky a soboty dojíždí do areálu pojízdná prodejna s čerstvým pečivem.
      </div>
    </div>
    <div class="clear"></div>
    
    <?php
        printPrettyPhotoLinks($mainImgPath, $part, $mainImgName);  
    ?>
  </div>

  <?php 
    $part = 'housing';
    $mainImgName = 'karavany.JPG';
    $mainImgPath = 'gallery/ubytovani';
    $mainImg = $mainImgPath.'/'.$mainImgName;  
  ?>

  <div id="<?php echo($part); ?>" class="part">
    <div class="title">Ubytování<span class="toTop rightalign"><a href="#top">&nbsp;&nbsp;&nbsp;</a></span></div>
    <div>
      <?php echo('<div class="image"><a href="'.$mainImg.'" rel="prettyPhoto['.$part.']" ><img src="'.getMinImage($mainImg).'" alt="Karavany"> </a></div>');?>
      <div class="text">
      Pobyt v autokaravanech, obytných přívěsech a stanech s elektrickou přípojkou je možný kolem koupaliště nebo na odlehlejším klidném místě v areálu. V okolí pokladny lze využít FREE WIFI. 
      <br /><br />
      Jsou tu k dispozici 3 chatky (každá s 4 lůžky).
      <br /> 
      Vybavení chatky: 
      <ul>
        <li>2 palandy - polštáře, přikrývky, lůžkoviny a prostěradla</li>
        <li>šatní skřín s ramínky</li>
        <li>zrcadlo</li>      
        <li>lednice</li>
        <li>mikrovlná trouba</li>
        <li>elektrický dvouplotýnkový vařič</li>
        <li>rychlovarná konvice</li>
        <li>talíře, hrnky, skleničky, příbory, prkénko, kořenky, misky</li>
      </ul>
      <br />
      Každá chatka má venkovní zahradní nábytek.
      Možnost táboráku a grilování u stanů a chatek.
      <br /><br /> 
      Máte doma čtyřnohého mazlíčka? Vezměte ho s sebou (viz. <a href="index.php?page=pricelist#housinganimal">Ceník</a>).
      </div>
    </div>
    <div class="clear"></div>
    
    <?php
        printPrettyPhotoLinks($mainImgPath, $part, $mainImgName);  
    ?>
  </div>
  
  <?php 
    $part = 'sport';
    $mainImgName = 'hriste.JPG';
    $mainImgPath = 'gallery/hriste';
    $mainImg = $mainImgPath.'/'.$mainImgName;  
  ?>
  
  <div id="<?php echo($part); ?>" class="part">
    <div class="title">Sportovní aktivity <span class="toTop rightalign"><a href="#top">&nbsp;&nbsp;&nbsp;</a></span></div>
    <div>
      <?php echo('<div class="image"><a href="'.$mainImg.'" rel="prettyPhoto['.$part.']" ><img src="'.getMinImage($mainImg).'" alt="Hřiště"> </a></div>');?>
      <div class="text">
      Přímo v areálu se nachází:
      <ul>
        <li>dětské hřiště (pískoviště, prolejzačka, houpačka, trampolína)</li>
        <li>hřiště pro plážový volejbal se sítí (míč vlastní, případně možné zapůjčení)</li>
        <li>pingpongový stůl (pálky vlastní, případně možné zapůjčení)</li>
      </ul>
      <br />
      Možnost zapůjčení (za poplatek):
      <ul>
        <li>míč na plážový volejbal</li>
        <li>pálky na pingpong</li>
        <li>badmintonové pálky</li>
        <li>líný tenis</li>
        <li>létající talíř</li>
        <li>petang</li>
      </ul>
      <br />
      V budoucnu počítáme s vylepšením prostoru pro sportovní aktivity.
      </div>
    </div>
    <div class="clear"></div>
    
    <?php
        printPrettyPhotoLinks($mainImgPath, $part, $mainImgName);  
    ?>
  </div>
  
  <?php 
    $part = 'social';
    $mainImgName = 'wc.JPG';
    $mainImgPath = 'gallery/socialni_zarizeni';
    $mainImg = $mainImgPath.'/'.$mainImgName;  
  ?>
  
  <div id="<?php echo($part); ?>" class="part">
    <div class="title">Sociální zařízení<span class="toTop rightalign"><a href="#top">&nbsp;&nbsp;&nbsp;</a></span></div>
    <div>
      <?php echo('<div class="image"><a href="'.$mainImg.'" rel="prettyPhoto['.$part.']" ><img src="'.getMinImage($mainImg).'" alt="WC"> </a></div>');?>
      <div class="text">
      Pánské a dámské WC jsou umístěny ve dvou budovách na obou stranách koupaliště. 
      V jedné z nich jsou vybudovány sprchové boxy s teplou vodou na mince, umyvadla s bateriemi na studenou i teplou vodu. 
      <br /><br />
      V přední části koupací plochy jsou venkovní sprchy se studenou vodou.
      </div>
    </div>
    <div class="clear"></div>
    
    <?php
        printPrettyPhotoLinks($mainImgPath, $part, $mainImgName);  
    ?>
  </div>
</div>