<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin-top:0!important">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <?php wp_head(); ?>
</head>
<body <?php wp_body_open(); ?>>

<header class="p-3 mb-3 border-bottom">
  <div class="container">
      <?php get_template_part('template-parts/content', 'header'); ?>
  </div>
</header>