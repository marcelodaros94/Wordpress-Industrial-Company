<?php
/**
 * The template for displaying posts
 */

get_header(); ?>


        <div class="row section-cont">
          <div class="col-md-12">

            <?php
              // Start the loop.
              while ( have_posts() ) : the_post();
            ?>
                <article <?php post_class(); ?>>

                  <div class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                  </div>

                  <div class="entry-content">
                    <?php the_content(); ?>
                  </div>
                  <div class="swiper-container swiper">
                    <div class="swiper-wrapper">
                      <?php
                        $children = get_children(get_the_ID());
                        foreach ( $children as $children_id => $child ) {
                            echo '<div class="swiper-slide"><div class="slide-inner"><img class="image" src="'.$child->guid.'"/></div></div>';
                            $i++;
                        }
                      ?>   
                    </div>
                    <div class="swiper-pagination"></div>
                  </div>

                  <div class="page-container swiper">
                    <?php
                      $children = get_children(get_the_ID());
                      foreach ( $children as $children_id => $child ) {
                          echo '<div class="page"><img class="image" src="'.$child->guid.'"/></div>';
                          $i++;
                      }
                    ?>
                  </div>


                </article>

              <?php
              // End of the loop.
              endwhile;
            ?>

          </div>
        </div>
        
<script>
document.addEventListener("DOMContentLoaded", function(event) {
  /*
|------------------------------------------------------
|  JS: Swiper
|------------------------------------------------------
*/

var swiper = new Swiper('.swiper-container', {
	slidesPerView: 3.4,
	spaceBetween: 25,
	breakpoints: {
		1024: {
			slidesPerView: 3.4,
			spaceBetween: 25,
		},
		768: {
			slidesPerView: 2.4,
			spaceBetween: 25,
		},
		640: {
			slidesPerView: 1.4,
			spaceBetween: 25,
		},
		320: {
			slidesPerView: 1.4,
			spaceBetween: 25,
		}
	},
	centeredSlides: false,
	grabCursor: true,/*
	pagination: {
		el: '.swiper-pagination',
		clickable: true,
  },*/
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	slideToClickedSlide: true,
});

/*
|------------------------------------------------------
|  JS: Cards with Fullscreen zoom
|------------------------------------------------------
*/

var root  = document.documentElement;
var body  = document.body;
var pages = document.querySelectorAll(".page");
var tiles = document.querySelectorAll(".swiper-slide");

for (var i = 0; i < tiles.length; i++) {  
  addListeners(tiles[i], pages[i]);
}

function addListeners(tile, page) {
  
  tile.addEventListener("click", function() {
    animateHero(tile, page);
		$('body').addClass('open-card');
  });
  
  page.addEventListener("click", function() {
    animateHero(page, tile);
		$('body').removeClass('open-card');
  });  
}

function animateHero(fromHero, toHero) {
    
  var clone = fromHero.cloneNode(true);
      
  var from = calculatePosition(fromHero);
  var to = calculatePosition(toHero);
  
  TweenLite.set([fromHero, toHero], { visibility: "hidden" });
  TweenLite.set(clone, { position: "absolute", margin: 0 });
  
  body.appendChild(clone);  
      
  var style = {
    x: to.left - from.left,
    y: to.top - from.top,
    width: to.width,
    height: to.height,
    autoRound: false,
    ease: Power1.easeOut,
    onComplete: onComplete
  };
   
  TweenLite.set(clone, from);  
  TweenLite.to(clone, 0.3, style)
    
  function onComplete() {
    
    TweenLite.set(toHero, { visibility: "visible" });
    body.removeChild(clone);
  }
}

function calculatePosition(element) {
    
  var rect = element.getBoundingClientRect();
  
  var scrollTop  = window.pageYOffset || root.scrollTop  || body.scrollTop  || 0;
  var scrollLeft = window.pageXOffset || root.scrollLeft || body.scrollLeft || 0;
  
  var clientTop  = root.clientTop  || body.clientTop  || 0;
  var clientLeft = root.clientLeft || body.clientLeft || 0;
    
  return {
    top: Math.round(rect.top + scrollTop - clientTop),
    left: Math.round(rect.left + scrollLeft - clientLeft),
    height: rect.height,
    width: rect.width,
  };
}
});
</script>
        <footer>
            Todos los derechos reservados © 2022
        </footer>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.5.0/js/swiper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.3/TweenMax.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
            
        <?php wp_footer() ?>
    </body>
</html>

