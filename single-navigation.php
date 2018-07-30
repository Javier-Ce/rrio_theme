



<?php echo '<div class="single-navigation">'; ?>

<span><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><i class="material-icons">close</i></a></span>

<?php echo '<span>'.get_previous_post_link('%link', '<i class="material-icons">arrow_back</i>').'</span>';
        twentyfifteen_entry_meta_child(true, false,false,false);
    echo '<span>'.get_next_post_link('%link', '<i class="material-icons">arrow_forward</i>').'</span></div>';
?>
