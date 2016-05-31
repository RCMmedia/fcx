<?php
/**
 * Template Name: Register
 */

get_header(); ?>
		<div class="container sponsors">
			

				<div class="inner clearfix">	
					
					<div class="register-wrap">
						<?php  if ( post_password_required() ) { ?>
						<img src="<?php bloginfo('template_url') ?>/images/lock-symbol.jpg" alt="lock-symbol" width="42" height="58" />
						<h3>This content is password protected. </h3>
						<h4>To obtain the password, please contact us for an assessment.</h4>
						<hr style="width: 50px;margin: 20px auto;border-color: #7d1a0f;">
						<a class="phone" href="tel:7144341516">714.434.1516</a>
						<a class="email" href="mailto:Info@FranchiseCapitalExchange.com">Info@FranchiseCapitalExchange.com</a>
						<span>OR</span>
						<p>Enter your password</p>
						<?php	 echo get_the_password_form();?>
						
 						<?php		} else {  ?>
						
 						<!-- password good -->
 						password good, display what you want
 						
						
	 					<?php	} ?>
					</div>
				</div><!-- .inner -->
				
				
				
		</div><!-- #container -->

<?php get_footer(); ?>
