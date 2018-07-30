<?php
function my_theme_enqueue_styles() {

    $parent_style = 'twentyfifteen-style';
    $firstchild_style = 'child-style';
    $secondchild_style = 'secondchild-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( $firstchild_style,
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
    wp_enqueue_style( $secondchild_style,get_stylesheet_directory_uri() . '/second_style.css',array( $firstchild_style ) );
    wp_enqueue_style( 'material-icons','https://fonts.googleapis.com/icon?family=Material+Icons',array( $secondchild_style ) );

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

if ( ! function_exists( 'my_child_theme_setup' ) ) :

function my_child_theme_setup() {
    set_post_thumbnail_size();
}
endif; // my_child_theme_setup
add_action( 'after_setup_theme', 'my_child_theme_setup',11 );



add_action( 'init', 'register_my_menu' );
function register_my_menu() {
    register_nav_menu( 'contact_menu', __( 'Contact Menu' ) );
}

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen Child 1.0
 */
require get_stylesheet_directory() . '/inc/template-tags.php';


?>