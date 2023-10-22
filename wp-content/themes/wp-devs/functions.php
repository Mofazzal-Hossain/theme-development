<?php


require get_template_directory().'/inc/customizer.php';

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
    add_theme_support( 'post-thumbnails' );

    add_theme_support( 'custom-logo', array(
        'height'      => 150,
        'width'       => 150,
        'flex-height' => true,
        'flex-width'  => true,
    ) );
    add_theme_support( 'title-tag' );

    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );


}

add_action('after_setup_theme', 'devs_config');

add_action('widgets_init', 'wpdevs_widgets');

function wpdevs_widgets(){
    register_sidebar(
        [
            'name' => 'Service Sidebar 01',
            'id' => 'sidebar-service-01',
            'description' => 'Widgets in this area will be shown on all posts and pages.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ]
    );
    register_sidebar(
        [
            'name' => 'Service Sidebar 02',
            'id' => 'sidebar-service-02',
            'description' => 'Widgets in this area will be shown on all posts and pages.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ]
    );
    register_sidebar(
        [
            'name' => 'Service Sidebar 03',
            'id' => 'sidebar-service-03',
            'description' => 'Widgets in this area will be shown on all posts and pages.',
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        ]
    );
   
}

if(!function_exists('wp_body_open')){
    function wp_body_open(){
        do_action('wp_body_open');
    }
}

include_once( dir( __FILE__ ) . '/inc/kirki/kirki.php' );

function wpdevs_kirki_configuration() {
    return array( 'url_path'     => get_stylesheet_directory_uri() . '/includes/kirki/' );
}
add_filter( 'kirki/config', 'wpdevs_kirki_configuration' );