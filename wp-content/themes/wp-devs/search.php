<?php get_header();?>

<div class="container">
    <h4>
        <?php
           echo _('Search result for: ','wedevs');
           echo get_search_query();
        ?>
    </h4>
    <?php get_search_form(); ?>

    <h3><a href="<?php echo get_permalink();?>"><?php echo the_title();?></a></h3>
    <?php if('post' == get_post_type()): ?>
        <span class="d-flex">Categories: <?php the_category();?></span>
        <?php if(the_tags()): ?>
            <span>Tags: <?php echo the_tags() ;?></span>
        <?php endif; ?>
    <?php endif;?>
    <?php if(the_content()):?>
        <p><?php echo the_content() ;?></p>
    <?php endif;?>
   <?php the_posts_pagination();?>
</div>

<?php get_footer();?>