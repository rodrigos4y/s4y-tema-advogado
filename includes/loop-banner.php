<? 
    $query = new WP_Query([
        'post_type'   => 'banners'
    ]);
    while($query->have_posts()) : $query->the_post(); 

?>
        <li>
            <div class="agileits-banner-info">
                <h3><?php
                    $custom = get_post_custom();
                    echo $custom["titulo"][0];
                ?>
                    <div class="border"></div> <span><?php
                    $custom = get_post_custom();
                    echo $custom["subtitulo"][0];
                ?></span></h3>
                <div class="w3-button">
                    <div class="w3ls-button">
                        <a href="#about" class="scroll hvr-shutter-out-vertical">Sobre</a>
                    </div>
                    <div class="w3l-button">
                        <a href="#contact" class="scroll hvr-shutter-out-vertical">Contato</a>
                    </div>
                    <div class="clearfix"> </div>
                </div>
            </div>
        </li>
<? endwhile; ?>
