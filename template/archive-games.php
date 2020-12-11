<?php /*
 * Template Name: Games template
 * Template Post Type: games  
 */ ?>
<?php get_header();?>


<?php if (have_posts()) : while (have_posts()) : the_post();?>

 
<div class ="gameframe">
<div class= "exit-button">
        <a href ="<?php echo get_home_url(); ?>">
               &#10683;
            </a>
    </div>
<?php the_content();?>

<div class="game-title">
<h1 class="title"><?php the_title();?></h1>
    
    </div>
</div>

<?php endwhile; endif;?>



<?php get_footer();?>