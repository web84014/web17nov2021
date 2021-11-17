<?php
/**
 * Template Name: Full-width
 */

get_header()
?>

<div class="full-width-page">
    <?php
    while ( have_posts() ) : the_post();
        the_content();
    endwhile;
    ?>
</div>
<?php
get_footer();