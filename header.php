<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen_Child
 * @since Twenty Fifteen Child 1.0
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
					$uploads_dir = wp_upload_dir();
					$logo_image = $uploads_dir['url'].'/logo.svg';
					$image_logo = '<img src='.$logo_image.' width="80" height="80" alt="'.get_bloginfo( 'name' ).'">'; 

					if ( is_front_page() && is_home() ) : ?>
						<h1 id ="logo" class="image-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php the_custom_logo();?>
							</a>
						</h1>
					<?php else : ?>
						<h2 id ="logo" class="image-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
								<?php echo $image_logo; ?>
							</a>
						</h2>
					<?php endif;



					
					

					$description = get_bloginfo( 'description', 'display' );
					if ( $description || is_customize_preview() ) : ?>
						<p class="site-description"><?php echo $description; ?></p>
					<?php endif;
				?>
				<button class="secondary-toggle"><?php _e( 'Menu and widgets', 'twentyfifteen' ); ?></button>
			</div><!-- .site-branding -->
		9</header><!-- .site-header -->

		<?php get_sidebar(); ?>
	</div><!-- .sidebar -->

	<div id="content" class="site-content">
