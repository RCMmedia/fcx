<?php
/**
 * Template Name: Private
 */

get_header(); ?>

		<div class="container sponsors">
			

				<div class="inner clearfix">	
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

						<?php the_content(); ?>

				<?php comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>

				</div><!-- .inner -->
				
				
		</div><!-- #container -->

<?php get_footer(); ?>
