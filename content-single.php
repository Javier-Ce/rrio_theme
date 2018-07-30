<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		
		$thumbID = get_post_thumbnail_id();
		$img_src = wp_get_attachment_image_url( $thumbID, 'medium' );
		$img_alt = get_post_meta( $thumbID, '_wp_attachment_image_alt', true);
		$img_title = get_the_title($thumbID);
		$img_srcset = wp_get_attachment_image_srcset( $thumbID, 'medium' );
		$img_title = str_replace(array("-","_")," ", $img_title);
		$img_sizes = '(max-width: 59.6875em) 500px, 500px';

	?>

		<img
		src="<?php echo esc_url( $img_src ); ?>"
     	srcset="<?php echo esc_attr( $img_srcset ); ?>"
     	sizes="<?php echo $img_sizes; ?>"
     	title="<?php echo $img_title; ?>"
     	alt="<?php echo $img_alt; ?>">
	

   	<div class="entry-content">
        <?php
            
            /* translators: %s: Name of current post */
            /*the_title( '<h1 class="entry-title">', '</h1>' );
            
            the_content( sprintf(
                __( 'Continue reading %s', 'twentyfifteen' ),
                the_title( '<span class="screen-reader-text">', '</span>', false )
            ) );

            twentyfifteen_entry_meta_child(false,true,true,true);

            wp_link_pages( array(
                'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfifteen' ) . '</span>',
                'after'       => '</div>',
                'link_before' => '<span>',
                'link_after'  => '</span>',
                'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'twentyfifteen' ) . ' </span>%',
                'separator'   => '<span class="screen-reader-text">, </span>',
            ) );*/
        ?>
    </div><!-- .entry-content -->

</article><!-- #post-## -->
