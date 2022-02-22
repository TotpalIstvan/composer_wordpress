<?php
get_header();
 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post();?>
        <div class="post-content">
            <h1><?php the_title(); ?></h1>
       <?php the_content();?>
        <?php the_excerpt(); ?>
        </div>
    <?php
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;
 
get_sidebar();
get_footer();
?>