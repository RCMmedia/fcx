<div class="footer">
	Franchise Capital Exchange is a production of O’Connell & Company, Inc. / FranWise®
</div>

</div><!-- .content opened on header.php -->

<div class="overlay_wrap">
	<div id="nav-icon" class="trigger-overlay overlay-trigger">
		  <span></span>
		  <span></span>
		  <span></span>
		</div><!-- #nav-icon -->
	
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
	<div class="privacy-policy">
		<a href="<?php bloginfo('url') ?>/private/">Private Policy</a>
	</div>
</div>

<script>
	$(document).ready(function(){
	$('#nav-icon').click(function(){
		$('#content #nav-icon').hide('open');
		$('.overlay-trigger').toggleClass('open');
		
	});
	$('.overlay-trigger').click(function(){
		$('#content #nav-icon').show('');
		$('.overlay-trigger').removeClass('open');
		
	});
	
	$('.reason').click(function(){
		$(this).find('.reason_content').slideDown();
		$(this).find('span.button').fadeOut();
	});
	
}); // end document ready

//overlay functions
$(document).on("click", ".trigger-overlay", function () {
	$('.overlay_wrap').toggleClass('active');
	$('.nav-wrap').toggleClass('overlay-open');
}); 
	

//responsive JS with modernizer
var mod = function(){
		if (Modernizr.mq('(max-width: 740px)')) {
	  	$( "#sidebar" ).insertAfter( $( ".header-wrap" ) );
	    
	    var topofDiv = $(".nav-wrap").offset().top; //gets offset of header
			var height = $(".nav-wrap").outerHeight(); //gets height of header

			$(window).scroll(function(){
			    if($(window).scrollTop() > (topofDiv + height)){
			       $('.nav-wrap').addClass('fixed');
			    }
			    else{
			       $('.nav-wrap').removeClass('fixed');
			    }
			});
			    
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

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-59242041-10', 'auto');
  ga('send', 'pageview');

</script>
<?php wp_footer(); ?>
</body>
</html>
