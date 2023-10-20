<?php get_header();?>

<div class="container">
    <h3><?php echo the_title();?> #<?php the_ID() ;?></h3>
    <span class="d-flex">Categories: <?php the_category();?></span>
    <?php if(the_tags()): ?>
        <span>Tags: <?php echo the_tags() ;?></span>
    <?php endif; ?>
    <?php if(the_content()):?>
        <p><?php echo the_content() ;?></p>
    <?php endif;?>
    <?php 
    if(comments_open() || get_comments_number()) :
      comments_template();
    endif;
    ?>
</div>

<?php get_footer();?>