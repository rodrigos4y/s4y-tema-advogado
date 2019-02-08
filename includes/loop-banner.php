<? 
    $query = new WP_Query([
        'post_type'   => 'banners'
    ]);
    while($query->have_posts()) : $query->the_post();
        global $post;
        $titulo_banner = get_post_meta($post->ID, 'titulo_banner', true);
        $subtitulo_banner = get_post_meta($post->ID, 'subtitulo_banner', true);

?>
        <li>
            <div class="agileits-banner-info">
                <h3><?php echo $titulo_banner; ?> <div class="border"></div> <span><?php echo $subtitulo_banner; ?></span></h3>
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
