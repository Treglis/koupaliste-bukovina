<?php 
  if(!$page){
    include('contents/main.php');	
  }elseif($page == 'contact'){
        include('contents/contact.php');
  }else {
    echo('<div class="box-content">');
      if($page == 'rules'){
        include('contents/rules.php');
      }elseif($page == 'pricelist'){
        include('contents/pricelist.php');
      }elseif($page == 'offer'){
        include('contents/offer.php');
      }
    echo('</div>');
  }
?>
