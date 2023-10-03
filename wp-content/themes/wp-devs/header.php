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
        <div class="header-logo">
           <?php 
                if ( !empty(the_custom_logo()) ):
                    the_custom_logo();
                else:
                   ?>

                    <a href="<?php echo home_url('/'); ?>">
                        <span><?php bloginfo('name'); ?></span>
                    </a>

                    <?php
                endif;
           ?>
        </div>
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
  <img src="<?php header_image();?>" width="<?php echo get_custom_header()->width ?>" height="<?php echo get_custom_header()->height;?>" alt="" style="width:100%">