<?php
echo '<nav class="navigation pagination" role="navigation"><div class="nav-links">';
if(get_previous_posts_link()) echo'<span class="prev_link">'.get_previous_posts_link(__( '<i class="material-icons">arrow_back</i>', 'twentyfifteen' )).'</span>';


$args = array('prev_next' => '0');
if(paginate_links( $args )) echo'<span class="pages">'.paginate_links( $args ).'</span>';

if(get_next_posts_link()) echo'<span class="next_link">'.get_next_posts_link(__( '<i class="material-icons">arrow_forward</i>', 'twentyfifteen' )).'</span>';

echo '</div></nav>';
?>            