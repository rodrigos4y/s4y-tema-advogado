<?
    add_action('wp_enqueue_scripts', 's4l_add_script_cabecalho');
    add_action('wp_footer', 's4l_add_script_rodape');
    add_theme_support('post-thumbnails');
    add_image_size('noticias-home', 640, 426, true);
    add_action('init', 's4l_action_init');

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

    function s4l_action_init(){
        register_nav_menu('s4l_principal', 'Menu Principal (cabeçalho)');
        register_nav_menu('s4l_rodape', 'Menu Rodapé');
    }

    //Custom post com custom field

    add_action('init', 'banner_register');

    function banner_register(){
        $descritivos = array(
            'name' => 'Banners',
            'singular_name' => 'Banner',
            'add_new' => 'Adicionar Novo Banner',
            'add_new_item' => 'Adicionar Banner',
            'edit_item' => 'Editar Banner',
            'new_item' => 'Novo Banner',
            'view_item' => 'Ver Banner',
            'search_items' => 'Procurar Banner',
            'not_found' => 'Nenhum Banner encontrado',
            'not_found_in_trash' => 'Nenhum Banner na Lixeira',
            'parent_item_colon' => ''
        );
    
        $args = array(
            'labels' => $descritivos,
            'public' => true,
            'publicly_queryable' => true,
            'show_ui' => true,
            'query_var' => true,
            'rewrite' => true,
		    'capability_type' => 'post',
            'hierarchical' => false,
            'menu_position' => 5,
            'supports' => array('title', 'thumbnail')
        );
    
        register_post_type('banners', $args);
        flush_rewrite_rules();
    }

    register_taxonomy(
        "categorias", 
            "noticias", 
            array(            
                "label" => "Categorias", 
                "singular_label" => "Categoria", 
                "rewrite" => true,
                "hierarchical" => true
            )
    );

    add_action("admin_init", "admin_init");

    function admin_init(){
        add_meta_box("titulo-meta", "Título", "titulo", "banners", "normal", "low");
        add_meta_box("subtitulo-meta", "Subtítulo", "subtitulo", "banners", "normal", "low");
    }
    function titulo(){
        global $post;
        $custom = get_post_custom($post->ID);
        $titulo = $custom["titulo"][0];
?>
        <p>
            <label>Título: </label>
            <input name="titulo-banner" type="text" value="<? echo $titulo; ?>">
        </p>
<?
    }

    function subtitulo(){
        global $post;
        $custom = get_post_custom($post->ID);
        $subtitulo = $custom["subtitulo"][0];
?>
        <p>
            <label>Subtítulo: </label>
            <input name="subtitulo-banner" type="text" value="<? echo $subtitulo; ?>">
        </p>
<?
    }

    //Salvar os valores no post
    add_action('save_post', 'save_details');

    function save_details(){
        global $post;

        update_post_meta($post->ID, "titulo", $_POST["titulo-banner"]);
        update_post_meta($post->ID, "subtitulo", $_POST["subtitulo-banner"]);
    }

    //Criar os itens na coluna do custom post
    add_action("manage_posts_custom_column", "banner_custom_columns");
    add_filter("manage_edit-banner_columns", "banner_edit_columns");

    function banner_edit_columns($columns){
        $columns = array(
            "cb" => "<input type='checkbox' />",
            "titulo" => "Título",
            "subtitulo" => "Subtitulo",

        );
        return $columns;
    }
    function banner_custom_columns($columns){
        global $post;

        switch($columns){
            case "titulo":
                $custom = get_post_custom();
                echo $custom["titulo"][0];
                break;
            case "subtitulo":
                $custom = get_post_custom();
                echo $custom["subtitulo"][0];
                break;
        }
    }

    function add_menuclass($ulclass) {
        return preg_replace('/<a /', '<a class="scroll"', $ulclass);
     }
    add_filter('wp_nav_menu','add_menuclass');

    require_once('post-area.php');
?>