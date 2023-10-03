<?php get_header();?>

<div class="site-content" id="content" style="margin: 50px 0">
    <div id="primary" class="content-area">
        <div id="main" class="site-main">
            <section class="home-blog">
                <?php
                    if(have_posts()):
                        while(have_posts()): the_post();
                        ?>    
                            <article style="margin:30px 0">
                                <h2><?php echo the_title();?></h2>
                                <div class="meta-info">
                                    <p>Posted in: <?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                                    <p>Categories: <?php the_category(', '); ?> </p>
                                    <p>Tags: <?php the_tags( '', ', '); ?> </p>
                                    <?php the_content();?>
                                </div>
                            </article>
                        <?php
                        endwhile;
                    else: 
                        echo '<p>No posts found</p>';
                    endif;
                ?>
            </section>
        </div>
    </div>
</div>

<?php get_footer();?>