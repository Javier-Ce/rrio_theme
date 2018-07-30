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
		echo '<a href="'.get_permalink().'">';
		$thumbID = get_post_thumbnail_id();
		$img_src = wp_get_attachment_image_url( $thumbID, 'medium' );
		$img_alt = get_post_meta( $thumbID, '_wp_attachment_image_alt', true);
		$img_title = get_the_title($thumbID);
		$img_srcset = wp_get_attachment_image_srcset( $thumbID, 'medium' );
		$img_title = str_replace(array("-","_")," ", $img_title);
		$img_sizes = '(min-width: 59.6875em) 500px, 500px';
	?>

		<img
		src="<?php echo esc_url( $img_src ); ?>"
		srcset="<?php echo esc_attr( $img_srcset ); ?>"
     	sizes="<?php echo $img_sizes; ?>"
     	title="<?php echo $img_title; ?>"
     	alt="<?php echo $img_alt; ?>"
     	>
		<?php echo '</a>'; ?>

		<div class="entry-header">
		<?php
			twentyfifteen_entry_meta_child(true);
			the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			twentyfifteen_entry_meta_child(false,true,true,true);
		?>
		</div>

</article><!-- #post-## -->
