<?php

function wpdevs_load_scripts(){
    wp_enqueue_style('wpdev-style', get_stylesheet_uri(), array(), '1.0', 'all');
}

add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');



function devs_config(){
    register_nav_menus(
        array(
            'primary' => 'Header Menu',
            'footer' => 'Footer Menu'
        )
    );

    $hero_banner= array(
        'height' => 400,
        'width' => 1900,
    );

    add_theme_support( 'custom-header',$hero_banner);
}

add_action('after_setup_theme', 'devs_config');