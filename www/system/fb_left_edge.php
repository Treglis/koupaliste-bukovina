<div id="fb-root"></div>
<script type="text/javascript">
(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/cs_CZ/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>

<div class="fb-left-edge visible">		
  <div class="fb-like-box-wrapper">
	  <div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="300" data-height="267" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="false"></div>
	</div>
  <div class="fb-left-edge-link"></div>
</div>


<script type="text/javascript">
    function swipedetect(el, callback){
 
       var touchsurface = el,
       swipedir,
       startX,
       startY,
       distX,
       distY,
       threshold = 150, //required min distance traveled to be considered swipe
       restraint = 100, // maximum distance allowed at the same time in perpendicular direction
       allowedTime = 300, // maximum time allowed to travel that distance
       elapsedTime,
       startTime,
       handleswipe = callback || function(swipedir){}
       
       touchsurface.addEventListener('touchstart', function(e){
        var touchobj = e.changedTouches[0]
        swipedir = 'none'
        dist = 0
        startX = touchobj.pageX
        startY = touchobj.pageY
        startTime = new Date().getTime() // record time when finger first makes contact with surface
        e.preventDefault()
       
       }, false)
       
       touchsurface.addEventListener('touchmove', function(e){
        e.preventDefault() // prevent scrolling when inside DIV
       }, false)
       
       touchsurface.addEventListener('touchend', function(e){
        var touchobj = e.changedTouches[0]
        distX = touchobj.pageX - startX // get horizontal dist traveled by finger while in contact with surface
        distY = touchobj.pageY - startY // get vertical dist traveled by finger while in contact with surface
        elapsedTime = new Date().getTime() - startTime // get time elapsed
        if (elapsedTime <= allowedTime){ // first condition for awipe met
         if (Math.abs(distX) >= threshold && Math.abs(distY) <= restraint){ // 2nd condition for horizontal swipe met
          swipedir = (distX < 0)? 'left' : 'right' // if dist traveled is negative, it indicates left swipe
         }
         else if (Math.abs(distY) >= threshold && Math.abs(distX) <= restraint){ // 2nd condition for vertical swipe met
          swipedir = (distY < 0)? 'up' : 'down' // if dist traveled is negative, it indicates up swipe
         }
        }
        handleswipe(swipedir)
        e.preventDefault()
        }, false)
    }
 
//USAGE:
/*
var el = document.getElementById('someel')
swipedetect(el, function(swipedir){
 swipedir contains either "none", "left", "right", "top", or "down"
 if (swipedir =='left')
   alert('You just swiped left!')
})
*/

  var fbLeftEdgeEl = jQuery('.fb-left-edge')[0];
  swipedetect(fbLeftEdgeEl, function(swipedir){
    //swipedir contains either "none", "left", "right", "top", or "down"
    if (swipedir =='right'){
      jQuery('.fb-left-edge').animate({
          'left' : "0px" //moves right
          });
    }else if(swipedir =='left'){
      jQuery('.fb-left-edge').animate({
          'left' : "-300px" //moves left
          });
    }
  }
  );


 
  jQuery(document).ready( function() {   
      jQuery('.fb-left-edge').css({
          'left' : "-300px" //moves right
          });
          
      jQuery('.fb-left-edge').mouseenter( function() {
          jQuery('.fb-left-edge').animate({
          'left' : "0px" //moves right
          });
      });
      
      jQuery('.fb-left-edge').mouseleave( function() {
          jQuery('.fb-left-edge').animate({
          'left' : "-300px" //moves right
          });
      });
  });
</script>
