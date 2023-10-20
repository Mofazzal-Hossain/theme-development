<?php get_header();?>

<div class="site-content" id="content" style="margin: 50px 0">
    <div id="primary" class="content-area">
        <div id="mai" class="site-main">
            <div class="container">
            <section class="home-blog">
                <?php
                    if(have_posts()):
                        while(have_posts()): the_post();
                        ?>    
                            <article style="margin:30px 0">
                                <h2><a href="<?php the_permalink(); ?>"><?php echo the_title();?></a></h2>
                                <div class="meta-info">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php echo the_post_thumbnail('large') ?>
                                    </a>
                                    <p>Posted in: <?php echo get_the_date(); ?> by <?php the_author(); ?></p>
                                    <p>Categories: <?php the_category(', '); ?> </p>
                                    <p>Tags: <?php the_tags( '', ', '); ?> </p>
                                    <?php the_content();?>
                                </div>
                            </article>
                        <?php
                        endwhile;
                        ?>
                            <div class="pagination d-flex items-justified-space-between">
                                <div class="new">
                                    <?php previous_posts_link("<< newer posts "); ;?>
                                </div>
                                <div class="older">
                                    <?php next_posts_link("older posts >> "); ;?>
                                </div>
                            </div>
                        <?php
                    else: 
                        echo '<p>No posts found</p>';
                    endif;
                ?>
            </section>
            <div class="row">
                <div class="col-md-4">
                    <?php if(is_active_sidebar('sidebar-service-01')) :?>
                        <h3>Service 01</h3>
                        <?php dynamic_sidebar('sidebar-service-01');?>
                    <?php endif;?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('sidebar-service-02')) :?>
                        <h3>Service 02</h3>
                        <?php dynamic_sidebar('sidebar-service-02');?>
                    <?php endif;?>
                </div>
                <div class="col-md-4">
                    <?php if(is_active_sidebar('sidebar-service-03')) :?>
                        <h3>Service 03</h3>
                        <?php dynamic_sidebar('sidebar-service-03');?>
                    <?php endif;?>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>