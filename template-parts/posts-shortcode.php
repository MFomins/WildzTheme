
<div class="games-content">
    <div class="games-info">
        <div class="category-title">

        <?php echo $atts['category']; ?>

        </div>

        <div class="games-content">
        <a href="<?php the_permalink(); ?>">
            <img src="<?php the_field('logo'); ?>" />
         <div class="game-link">
            <?php the_title(); ?>
           </div>
        </div>
        
       


    </div>
</div>