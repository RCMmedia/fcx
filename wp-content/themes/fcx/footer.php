<div class="footer">
	Franchise Capital Exchange is a production of O’Connell & Company, Inc. / FranWise®
</div>
</div><!-- .content -->

<script>
	$(document).ready(function(){
	$('#nav-icon').click(function(){
		$(this).toggleClass('open');
	});
	
	$('.reason').click(function(){
		$(this).find('.reason_content').slideDown();
		$(this).find('span.button').fadeOut();
	});
	
});
// do something after scrolling past header
var bottom = $('.trigger_nav').offset().top;
$(window).scroll(function(){    
    if ($(this).scrollTop() > bottom){ 
        $('.nav-wrap').addClass('fixed'); 
    }
    else{
        $('.nav-wrap').removeClass('fixed');
    }
});
//responsive JS
var media = matchMedia('(max-width: 700px)');
media.addListener(function (mediaQueryList) {
if (mediaQueryList.matches) {
//$('#sidebar').hide()
$( "#sidebar" ).insertAfter( $( ".header-wrap" ) );
} else {
//$('#sidebar').show()
$( "#sidebar" ).insertAfter( $( "body" ) );

}
});
</script>
<?php wp_footer(); ?>
</body>
</html>
