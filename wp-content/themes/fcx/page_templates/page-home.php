<?php
/**
 * Template Name: Homepage
 */

get_header(); ?>

		<div id="container" class="container clearfix">
			
			<div class="aboutus">
				<?php the_field('home_top_content'); ?>
				<span style="width: 100px; background: rgb(163, 163, 163) none repeat scroll 0% 0%; display: block; margin: 0 auto 30px; height: 2px;"></span>
				<?php the_field('home_bottom_content'); ?>
			</div>

			<div class="page_link_wrap">
				<div class="inner clearfix">	
					
				<?php if( have_rows('home_page_links') ): ?>
				   <?php while ( have_rows('home_page_links') ) : the_row(); ?>
				
				      <div class="page_link">
					      <a href="<?php the_sub_field('page_link_url'); ?>">
						      <img class="non-hover" src="<?php the_sub_field('page_image'); ?>"/>
						      <img class="hover" src="<?php the_sub_field('page_image_hover'); ?>"/>
						      <span><?php the_sub_field('home_page_link_text'); ?></span>
					      </a>
				      </div>
				
				    <?php endwhile; ?>
				<?php endif; ?>
				
				</div><!-- .inner -->
			</div><!-- .page_link_wrap -->
		</div><!-- #container -->

<?php get_footer(); ?>
