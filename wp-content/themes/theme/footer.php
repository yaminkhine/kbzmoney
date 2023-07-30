<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
		</div><!-- end of main container row -->
	</div><!-- end of main container -->
</div><!-- end of main -->
	
<div class="footer">
	<div class="container">
		<?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('Footer') ) ?>
	</div><!-- end of footer container -->
</div><!-- end of footer -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/jquery.min.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/slick-slider.js"></script>
<script>
	$(document).ready(function(){
  $('.slick-carousel').slick({
    arrows: false,
    centerPadding: "0px",
    dots: true,
    slidesToShow: 1,
    infinite: false,
	 autoplay: false
  });

		
  $('.slick-carousel2').slick({
    arrows: true,
    centerPadding: "0px",
    dots: false,
    slidesToShow: 3,
    infinite: true,
	autoplay: false,
	   responsive: [{
    breakpoint: 991,
    settings: {
      slidesToShow: 2,
      slidesToScroll: 1,
    },
	 breakpoint: 767,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
    }
  }]
  });
	$('ul.slick-carousel2 button').html("");
		
		
	size_li = $(".blog-list li").length;
    x_first = 6; 

   $('ul.blog-list li:lt('+x_first+')').show();

		$(window).scroll(function() {
			if($(window).scrollTop() == $(document).height() - $(window).height()) {
				
				x_first = (x_first+8 <= size_li) ? x_first+6 : size_li;
					$('ul.blog-list li:lt('+x_first+')').show();
			}
		});
	
		 $(".load-more").click(function(e) {
				 x_first = (x_first+6 <= size_li) ? x_first+6 : size_li;
              
				 $('ul.blog-list li:lt('+x_first+')').show();
               
		   if( size_li  == x_first) {
			   $(".load-more").hide();
		   }
			   return false;
		 });
		
});
	$('.search-form-top').on('click','img',function(){
		  var elms = document.getElementsByClassName("search-input-top");
           Array.from(elms).forEach((x) => {
    if (x.style.display === "none") {
      x.style.display = "block";


    } else {
      x.style.display = "none";
    }
  })
	})
	
		$('div#menu-icon').on('click','img',function(){
		  var popup = document.getElementsByClassName("menu-popup");
        Array.from(popup).forEach((x) => {
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  })
	})
	
	$('.menu-popup .close').on('click',function(){
		 var popup = document.getElementsByClassName("menu-popup");
          Array.from(popup).forEach((x) => {    
          x.style.display = "none";    
        })
	})
</script>
<?php wp_footer(); ?>
</body>
</html>