<?php

function art_load_styles_scripts(){
    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/art-theme.css');
}
add_action('wp_enqueue_scripts', 'art_load_styles_scripts');

function art_init_theme() {
    register_nav_menu('main-menu', __('Hoofdmenu'));
}
add_action('init', 'art_init_theme');