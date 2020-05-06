<?php get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php


			$r=0;
			//echo $posts_per_page;
			$myCount = $wp_query->found_posts;
			//echo 'myCount'.$myCount;

			$Y = $myCount/3;

			//echo '$Y'.floor($Y);

			$Sobrante = $myCount-(3*floor($Y));


			//echo '$Sobrante = '.$Sobrante;



			// Start the loop.
			while ( have_posts() ) : the_post();
				$r++;
				$str= "";
				if($r==1){
					if($Sobrante==1)$str.=" jander";
					else if($Sobrante==2)$str.=" clander";
				}

				


				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				//get_template_part( 'content', get_post_format() );
				?>

				<article class="<?php echo $str ?>">
					<?php
						the_post_thumbnail('full');
					?>
				</article>



				<?php

			// End the loop.
			endwhile;

			// Previous/next page navigation.
			the_posts_pagination( array(
				'prev_text'          => __( 'Previous page', 'twentyfifteen' ),
				'next_text'          => __( 'Next page', 'twentyfifteen' ),
				'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>',
			) );

		// If no content, include the "No posts found" template.
		else :
			get_template_part( 'content', 'none' );

		endif;
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
