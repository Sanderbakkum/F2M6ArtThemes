<?php
    get_header();

    $args = [
        'header-menu' => __( 'Header Menu' ),
        
    ];
    wp_nav_menu($args);
?>
    
<?php


if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title() ?></h2>
    <?php the_content() ?>
    <a href="<?php the_permalink()?>">Meer informatie</a>
   
    <?php endwhile;

else :
    echo '<p> there are no posts!</p>';

endif;

?>
<?php 
get_footer();
?>
