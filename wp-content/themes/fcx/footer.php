<div class="footer">
	Franchise Capital Exchange is a production of O’Connell & Company, Inc. / FranWise®
</div>

</div><!-- .content opened on header.php -->

<div class="overlay_wrap">
	<div class="overlay_inner">

		<?php if( have_rows('home_page_links', 8) ): ?>
		   <?php while ( have_rows('home_page_links', 8) ) : the_row(); ?>
		
		      <div class="page_link">
			      <a href="<?php the_sub_field('page_link_url', 8 ); ?>">
				      <span><?php the_sub_field('home_page_link_text'); ?></span>
			      </a>
		      </div>
		
		    <?php endwhile; ?>
		<?php endif; ?>
		
	</div>
</div>

<script>
	$(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
	});
	
	$('.reason').click(function(){
		$(this).find('.reason_content').slideDown();
		$(this).find('span.button').fadeOut();
	});
	
	
	
}); // end document ready

//overlay functions
$(document).on("click", ".trigger-overlay", function () {
	$('.overlay_wrap').toggleClass('active');
}); 
	
/*
// do something after scrolling past header
var bottom = $('.header-wrap').offset().top;
$(window).scroll(function(){    
	if ($(this).scrollTop() > bottom){ 
		$('.nav-wrap').addClass('fixed'); 
	}
	else{
		$('.nav-wrap').removeClass('fixed');
	}
});
*/




//responsive JS with modernizer
var mod = function(){
		if (Modernizr.mq('(max-width: 700px)')) {
	  	$( "#sidebar" ).insertAfter( $( ".header-wrap" ) );
	        
	  } else {
	  	// Clear the settings etc
	  	$( "#sidebar" ).insertBefore( $( "#content" ) );
	  	
	  	var topofDiv = $(".header").offset().top; //gets offset of header
var height = $(".header").outerHeight(); //gets height of header

$(window).scroll(function(){
    if($(window).scrollTop() > (topofDiv + height)){
       $('.nav-wrap').addClass('fixed');
    }
    else{
       $('.nav-wrap').removeClass('fixed');
    }
});
	  }
	}
	
	// Shortcut for $(document).ready()
	$(function() {
		// Call on every window resize
	  $(window).resize(mod);
	  // Call once on initial load
	  mod();
	});
</script>


<?php wp_footer(); ?>
</body>
</html>
