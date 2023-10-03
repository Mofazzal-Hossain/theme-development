<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top:0!important">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WP Devs</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <nav>
            <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'primary',
                    )
                )
            ?>
        </nav>
    </header>
  <img src="<?php header_image();?>" height="<?php echo get_custom_header()->height;?>" alt="" style="width:100%">