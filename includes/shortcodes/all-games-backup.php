<?php
$custom_terms = get_terms('category');
foreach ($custom_terms as $custom_term) {

wp_reset_query();
$args = array(
    'post_type' => 'games',
    'orderby' => 'menu_order title',
    'order'   => 'DESC',
    'tax_query' => array(
        array(
            'cat' => $category->term_id,
            'category_name' => $category,
            'category__in' => wp_get_post_categories(get_the_ID()),
            'post__not_in' => array(get_the_ID()),
            'orderby' => 'title',
            'order' => 'DESC',
            'taxonomy' => 'category',
            'field' => 'slug',
            'terms' => $custom_term->slug,
        ),
    ),
);

$loop = new WP_Query($args);

if($loop->have_posts()) {
    echo '<div class="category-title">'.$custom_term->name.'</div>';

    while($loop->have_posts()) : $loop->the_post();
        echo '<a class="games-titles" href="'.get_permalink().'"><img class="games-content"  src="'.get_field('logo').'"> '.get_the_title().'</a>';
        

    endwhile;
}

}
?>


