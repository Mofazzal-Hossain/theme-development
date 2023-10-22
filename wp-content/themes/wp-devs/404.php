<?php get_header();?>

<div class="container">
<h1>Error page</h1>
<?php get_search_form(); ?>
<?php 
    the_widget('WP_Widget_Recent_Posts');
    get_template_part('template-parts/content','error');
?>
</div>
<?php get_footer();?>