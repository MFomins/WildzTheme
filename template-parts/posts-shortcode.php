
<div class="row">
    <div class="games-info">
        <div class="category-title">
        <h4><?php $terms = get_terms("sectors");
         $count = count($terms); if ( $count > 0 ){ foreach ( $terms as $term )
          { echo $term->name; } } ?> Sector</h4>

                    
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