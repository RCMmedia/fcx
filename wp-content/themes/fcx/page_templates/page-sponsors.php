<?php
/**
 * Template Name: Sponsors
 */

get_header(); ?>

		<div class="container sponsors">
			

				<div class="inner clearfix">	
					
					<?php if( have_rows('sponsors') ): ?>
				   <?php while ( have_rows('sponsors') ) : the_row(); ?>
				
				      <div class="sponsor">
					      <?php if(get_sub_field('sponsor_url')) { ?>
										<a href="<?php the_sub_field('sponsor_url'); ?>"><img src="<?php the_sub_field('sponsor_logo'); ?>"/></a>
								<?php	} else {?>
										<img src="<?php the_sub_field('sponsor_logo'); ?>"/>
								<?php	} ?>
				      </div>
				
				    <?php endwhile; ?>
				<?php endif; ?>

				</div><!-- .inner -->
				
				
		</div><!-- #container -->

<?php get_footer(); ?>
