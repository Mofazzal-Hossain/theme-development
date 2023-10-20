<form method="get" action="<?php echo esc_url(home_url('/'));?>">
    <label for="s">Search: </label>
    <input type="text" id="s" name="s" id="s" value="<?php get_search_query(); ?>">
    <input type="submit" value="submit">
    <input type="hidden" name="post_type" value="post">
</form>