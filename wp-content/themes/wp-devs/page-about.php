<?php get_header();?>

<div class="container">
    <div class="latest-news">
        <h3>Lastest News</h3>
        <?php 
            $arg =[
                'post_type' => 'post',
                'post_per_page'=>5,
                'category__not_in'=> array(1),
            ];
                
            $postList = new WP_Query($arg);

            if($postList->have_posts()) : 
                while($postList->have_posts()) : $postList->the_post();
                  ?>
                    <article> 
                        <?php the_post_thumbnail('large');?>
                        <h3><?php echo the_title(); ?></h3>
                        <div class="meta-info">
                            <p>
                                by <span><?php the_author_posts_link(); ?></span>
                                categories <span><?php the_category(', ') ;?></span>
                                tags <span><?php the_tags() ;?></span>
                            </p>
                            <p><?php the_date() ;?></p>
                        </div>
                        <p><?php the_content(); ?></p>
                    </article>
                  <?php
                endwhile;
                wp_reset_postdata();
            endif;

            
        ?>
    </div>
</div>

<?php get_footer();?>