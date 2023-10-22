<?php 

function wpdevs_customizer($wp_customize) {
    $wp_customize->add_section(
        'copyright_sec',
        array(
            'title' => 'Copyright',
            'description' => 'Copyright section',
        )
    );
    $wp_customize->add_setting(
        'copyright',
        array(
            'default' => '',
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'copyright',
        array(
            'label' => 'Copyright',
            'section' => 'copyright_sec',
            'type' => 'text',
        )
    );

    $wp_customize->add_section(
        'blog-section',
        array(
            'title' => 'Blog',
            'description' => 'Blog section',
        )
    );

    $wp_customize->add_setting(
        'blog',
        array(
            'type' => 'theme_mod',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'blog',
        array(
            'label' => 'Blog',
            'type' => 'text',
            'section' => 'blog-section',
        )
    );
    
    
}

add_action('customize_register', 'wpdevs_customizer');