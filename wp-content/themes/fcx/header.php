<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php  wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script> 
<style>
	<?php if( get_field('banner_image')) { ?>
		.header {
  	background: rgba(0, 0, 0, 0) url(<?php the_field('banner_image'); ?>) repeat scroll 0 0 / cover ;
		text-align: center;
		height: 290px;
		position: relative;
	}
<?php	} ?>
	
</style>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="sidebar">
	<h2 class="event-date">August 24-26, 2016</h2>
	<span class="event-location">Downtown<br> Chicago, IL</span>
	<span class="event-privacy">Pre-approved Attendees Only</span>
	<span class="event-phonenumber"><a href="tel:7144341516">714.434.1516</a></span>
	<span class="event-email"><a href="mailto:Info@FranchiseCapitalExchange.com">Info@FranchiseCapitalExchange.com</a></span>
	<a class="button-register button" href="">Register <span style="font-size: 12px; display: inline;">&#9654;</span></a>
</div>
<div id="content">
	<div class="nav-wrap">
		<div class="logo">
			<a href="<?php bloginfo('url') ?>">
				<img class="logo-big" src="<?php bloginfo('template_url') ?>/images/logo-sm.png" alt="logo-sm" width="382" height="34">
				<img class="logo-small" src="<?php bloginfo('template_url') ?>/images/logo-mobile.png" alt="logo-mobile" >
				
			</a>
		</div>
		<div id="nav-icon">
		  <span></span>
		  <span></span>
		  <span></span>
		</div>
	</div>
	<div class="header-wrap">
		<div class="header">
			<?php if (is_front_page() ){ ?>
				<img src="<?php bloginfo('template_url') ?>/images/banner-home-inner.png" alt="banner-home-inner" width="411" height="252">
				<div class="tagline">
					Your Future Starts Here
				</div>
			<?php	} else { ?>
			
			<div class="page_title">
				<?php the_title(''); ?>
			</div>
			<?php } ?>
		</div>
		<div class="trigger_nav"></div><!-- .trigger_nav -->
	</div>	
