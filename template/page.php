<?php

/**
 * The template for displaying single pages.
 * 
 */
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly.
}
?>

<div id="content" class="site-content">
    <div id="primary" class="site-primary">
        <div class="content-banner">

        <h2>100% FREE GAMES</h2>
        <p>Welcome!</p>
        </div>
        
        <?php the_content(); ?>
        

    </div>
</div>


<?php while (have_posts()) : the_post(); ?>

<?php endwhile; ?>
<?php get_footer(); ?>
