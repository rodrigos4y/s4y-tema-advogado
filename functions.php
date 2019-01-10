<?
    add_action('wp_enqueue_scripts', 's4l_add_script_cabecalho');
    add_action('wp_footer', 's4l_add_script_rodape');
    add_theme_support('post-thumbnails');
    add_image_size('noticias-home', 640, 426, true);

    function s4l_add_script_cabecalho(){

        //Adicionar estilos
        wp_enqueue_style('bootstrap_s4l', get_stylesheet_directory_uri() . '/css/bootstrap.css');
        wp_enqueue_style('style_s4l', get_stylesheet_directory_uri() . '/style.css');
        wp_enqueue_style('fonts_s4l', get_stylesheet_directory_uri() . '/css/font-awesome.css');
    }

    function s4l_add_script_rodape(){

        wp_enqueue_script('jquery-s4l', get_stylesheet_directory_uri() . '/js/jquery-2.1.4.min.js');
        wp_enqueue_script('responsive-slides-s4l', get_stylesheet_directory_uri() . '/js/responsiveslides.min.js');
        wp_enqueue_script('bars-s4l', get_stylesheet_directory_uri() . '/js/bars.js');
        wp_enqueue_script('jarallax-s4l', get_stylesheet_directory_uri() . '/js/jarallax.js');
        wp_enqueue_script('scroll-s4l', get_stylesheet_directory_uri() . '/js/SmoothScroll.min.js');
        wp_enqueue_script('easing-s4l', get_stylesheet_directory_uri() . '/js/easing.js');
        wp_enqueue_script('move-top-s4l', get_stylesheet_directory_uri() . '/js/move-top.js');
        wp_enqueue_script('bootstrap-s4l', get_stylesheet_directory_uri() . '/js/bootstrap.js');
    }


?>