<? 
    $query = new WP_Query([
        'posts_per_page' => 4
    ]);
    while($query->have_posts()) : $query->the_post(); 

?>
    <div class="col-sm-3 gallery-grids-left">
        <div class="gallery-grid">
            <a href="#">
                    <img src="<? bloginfo('template_url') ?>/images/g1.jpg" alt="" />
                    <div class="g-captn">
                        <h4>Legal Adviser</h4>
                        <p>12.Apr.2017</p>
                    </div>
                </a>
        </div>
        <div class="des_agile_info">
            <h4><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h4>
            <p><? the_excerpt(); ?></p>
        </div>
    </div>
<? endwhile; ?>
