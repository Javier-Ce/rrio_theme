<?php
/**
 * The template used for displaying page content
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', 'content-page-2</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php

			the_content();

			$args = array(
			'post_parent' => $post->ID,
	        'post_type' => 'attachment',
	        'post_mime_type' => array('image','image/jpeg','image/png','image/gif'),
	        'order' => 'ASC'
    		);

			$attachments = get_posts( $args );
	     	if ( $attachments ) {foreach ( $attachments as $val ){
				echo wp_get_attachment_image( $val->ID, 'large');
			}}

		?>
		<?php
			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php edit_post_link( __( 'Edit', 'twentyfifteen' ), '<footer class="entry-footer"><span class="edit-link">', '</span></footer><!-- .entry-footer -->' ); ?>

</article><!-- #post-## -->
