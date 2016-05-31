<?php
/**
 * Template Name: Testimonials
 */

get_header(); ?>

		<div class="container">
			

				<div class="inner clearfix">	
					
					<?php if( have_rows('testimonials') ): ?>
				   <?php while ( have_rows('testimonials') ) : the_row(); ?>
				
				      <div class="testimonial">
					      <h3><?php the_sub_field('testimonial_name'); ?></h3>
					      <?php if(get_sub_field('testimonial_text')) { ?>
										<blockquote><?php the_sub_field('testimonial_text'); ?></blockquote>
								<?php	} ?>
								<?php if(get_sub_field('testimonial_video')) { ?>
										<?php the_sub_field('testimonial_video'); ?>
								<?php	} ?>
				      </div>
				
				    <?php endwhile; ?>
				<?php endif; ?>

				</div><!-- .inner -->
				
				
		</div><!-- #container -->

<?php get_footer(); ?>
