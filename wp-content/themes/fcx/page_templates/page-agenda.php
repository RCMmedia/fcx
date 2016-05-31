<?php
/**
 * Template Name: Agenda
 */

get_header(); ?>

		<div class="container sponsors">
			

				<div class="inner clearfix">	
					<div class="speaker_wrap clearfix">
					<?php if( have_rows('agenda') ): ?>
				   <?php while ( have_rows('agenda') ) : the_row(); ?>
				
				      <div class="speaker">
					      <div class="day_icon">
						      <span>Day <?php echo count( get_field('agenda') ); ?></span>
					      </div>
					      <div class="day_name"><?php the_sub_field('day_name'); ?></div>
					      <div><img src="<?php the_sub_field('speaker_image'); ?>"/></div>
					      <div class="speaker_name"><?php the_sub_field('speaker_name'); ?></div>
					      <div class="speaker_title"><?php the_sub_field('speaker_job_title'); ?></div>
					      <hr style="width: 50px;margin: 20px auto;border-color: #7d1a0f;">
					      <?php the_sub_field('speaker_topics'); ?>
					      
				      </div>
				
				    <?php endwhile; ?>
				<?php endif; ?>
					</div>
				<div class="agenda_testimonial">
					<div class="left">
						<?php the_field('agenda_testimonial'); ?>
					</div>
					<div class="right">
						<img src="<?php the_field('testimonial_image'); ?>"/>
					</div>
				</div>

				</div><!-- .inner -->
				
				
		</div><!-- #container -->

<?php get_footer(); ?>
