<?php get_header();?>

<div class="container">
    <?php if(has_post_thumbnail()):?>
        <?php the_post_thumbnail(array(500,500));?>
    <?php endif;?>
    <h3><?php echo the_title();?> #<?php the_ID() ;?></h3>
    <?php if(has_category()):?>
        <span class="d-flex">Categories: <?php the_category();?></span>    
    <?php endif;?>
    <?php if(has_tag()): ?>
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