<?php
/**
 * Template Name: Who Should Attend
 */

get_header(); ?>

		<div class="container sponsors">
			

				<div class="inner clearfix">	
					
					<div class="who-should-attend">
						<div class="reason">
							<span class="reason-number">1</span>
							<span class="reason-name">FRANCHISORS</span>
							<div class="reason_excerpt">
								<?php the_field('reason1_excerpt'); ?>
								<span class="button">Read More <span style="font-size: 12px; display: inline;">&#9654;</span></span>
							</div>
							<div class="reason_content" style="display: none;">
								<?php the_field('reason1_content'); ?>
								<hr>
							</div>
						</div><!-- .reason -->
						
						<div class="reason">
							<span class="reason-number">2</span>
							<span class="reason-name">INVESTORS</span>
							<div class="reason_excerpt">
								<?php the_field('reason2_excerpt'); ?>
								<span class="button">Read More <span style="font-size: 12px; display: inline;">&#9654;</span></span>
							</div>
							<div class="reason_content" style="display: none;">
								<?php the_field('reason2_content'); ?>
							</div>
						</div><!-- .reason -->
						
						<div class="reason">
							<span class="reason-number">3</span>
							<span class="reason-name">Sponsors</span>
							<div class="reason_excerpt">
								<?php the_field('reason3_excerpt'); ?>
								<span class="button">Read More <span style="font-size: 12px; display: inline;">&#9654;</span></span>
							</div>
							<div class="reason_content" style="display: none;">
								<?php the_field('reason3_content'); ?>
							</div>
						</div><!-- .reason -->
						
					</div><!-- .who-should-attend -->

				</div><!-- .inner -->
				
				
		</div><!-- #container -->

<?php get_footer(); ?>
