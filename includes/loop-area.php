<? 
    $query = new WP_Query([
        'post_type'   => 'areas',
        'posts_per_page' => 7
    ]);
    while($query->have_posts()) : $query->the_post(); 

?>
    <div 
        class='bar_group__bar thin elastic' 
        label='<?php
            $custom = get_post_custom();
            echo $custom["area"][0];
        ?>' 
        value='<?php
            $custom = get_post_custom();
            echo $custom["valor"][0];
        ?>'>
    </div>
<? endwhile; ?>