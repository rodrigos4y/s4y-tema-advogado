<? while(have_posts()) : the_post(); ?>
    <div class="col-sm-3 gallery-grids-left">
        <div class="gallery-grid">
            <a href="#">
                <?
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail('noticias-home');
                    }
                ?>
                    <div class="g-captn">
                        <h4>Legal Adviser</h4>
                        <p>12.Apr.2017</p>
                    </div>
                </a>
        </div>
        <div class="des_agile_info">
            <h4><? the_title(); ?></h4>
            <p><? the_content(); ?></p>
        </div>
    </div>
<? endwhile; ?>
