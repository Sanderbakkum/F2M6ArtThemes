<?php
    get_header();

    $args = [
        'header-menu' => __( 'Header Menu' ),
        'link_after' => __( '*' )
    ];
    wp_nav_menu($args);
?>

<?php


if ( have_posts() ) :
	while ( have_posts() ) : the_post(); ?>

    <h2><?php the_title() ?></h2>
    <?php the_content() ?>
    <a href="<?php the_permalink()?>">Lees Meer</a>
    <hr>

    <?php endwhile;

else :
    echo '<p> there are no posts!</p>';

endif;

?>

