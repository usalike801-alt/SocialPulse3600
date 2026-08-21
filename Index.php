<?php
/**
 * The main template file
 */
get_header(); ?>

<div class="pt-32 pb-20 px-6">
    <div class="max-w-7xl mx-auto">
        <?php
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
                the_content();
            endwhile;
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>
