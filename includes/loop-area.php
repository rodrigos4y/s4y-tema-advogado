<? 
    $query = new WP_Query([
        'post_type'   => 'areas',
        'posts_per_page' => 7
    ]);
    while($query->have_posts()) : $query->the_post(); 
        global $post;
        $area_title = get_post_meta($post->ID, 'area-title', true);
        $area_valor = get_post_meta($post->ID, 'area-valor', true);
?>
    <div 
        class='bar_group__bar thin elastic' 
        label='<?php echo $area_title; ?>' 
        value='<?php echo $area_valor; ?>'>
    </div>
<? endwhile; ?>