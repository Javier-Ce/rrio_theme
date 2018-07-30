<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'twentyfifteen' ); ?></a>

	<div id="sidebar" class="sidebar">
		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<?php
					twentyfifteen_the_custom_logo();

					if ( (is_front_page() && is_home())|| is_category() || is_tag() ) : ?>
						<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php endif;
/*
					$headline='h1';
					if(is_single()) $headline='h2';

					echo */


					?>
						
					<?php

					$description = get_bloginfo( 'description', 'display' );

					if(!is_single() && !is_category() && !is_tag() ):
						if ( $description || is_customize_preview() ) : ?>
							<p class="site-description"><?php echo $description; ?></p>
						<?php endif;
					endif;

					if ( is_category() ) : ?>
						<h2 class="cat-title"><?php single_cat_title(); ?></p>
					<?php endif;

					if ( is_tag() ) : ?>
						<h2 class="tag-title"><?php single_tag_title(); ?></p>
					<?php endif;?>

				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		</header><!-- .site-header -->

		<?php
		if ( is_single() ) {
			get_sidebar('single');
		}else{
			get_sidebar(); 
		}
		?>
		
	</div><!-- .sidebar -->

	
	

	



	<div id="content" class="site-content">
