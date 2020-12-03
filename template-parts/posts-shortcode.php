
<div class="row">
    <div class="games-info">
        <div class="category-title">
        <?php 
        $terms = wp_get_post_terms($post->ID, 'category');
if ($terms) {
    $out = array();
    foreach ($terms as $term) {
        $out[] = '<a class="' .$term->slug .'" href="' .get_term_link( $term->slug, 'category') .'">' .$term->name .'</a>';
    }
    echo join( ', ', $out );
} ?>
               
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