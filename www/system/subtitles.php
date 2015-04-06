<?php
   if($page == 'rules'){
      echo('<h2><b>Návštěvní a provozní řád</b></h2>');
      echo('<p><a href="#visit">návštěvní</a> - <a href="#work">provozní</a></p>');
   }elseif($page == 'pricelist'){
      echo('<h2><b>Ceník</b></h2>');
      echo('<p><a href="#entrance">denní vstupné</a> - <a href="#housing">ubytování</a></p>');
   }elseif($page == 'offer'){
      echo('<h2><b>Nabízíme</b></h2>');
      echo('<p><a href="#pool">koupání</a> - <a href="#food">občerstvení</a> - <a href="#housing">ubytování</a> - <a href="#sport">sportovní aktivity</a> - <a href="#social">sociální zařízení</a></p>');
   }elseif($page == 'contact'){
      echo('<h2><b>Kontakty</b></h2>');
      echo('<p><a href="#where">jak se k nám dostanete</a> - <a href="#mail">napiště nám</a></p>');
   }
   
?>