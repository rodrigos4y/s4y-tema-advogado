<?

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
    $titulo_banner = get_post_meta($post->ID, 'titulo_banner', true);
?>
    <p>
        <label>Título: </label>
        <input name="titulo_banner" type="text" value="<? echo $titulo_banner; ?>">
    </p>
<?
}

function subtitulo(){
    global $post;
    $subtitulo_banner = get_post_meta($post->ID, 'subtitulo_banner', true);
?>
    <p>
        <label>Subtítulo: </label>
        <input name="subtitulo_banner" type="text" value="<? echo $subtitulo_banner; ?>">
    </p>
<?
}

//Salvar os valores no post

function save_details_banner(){
    global $post;

    $titulo_banner = isset($_POST['titulo_banner']) ? $_POST['titulo_banner'] : '';
    $subtitulo_banner = isset($_POST['subtitulo_banner']) ? $_POST['subtitulo_banner'] : '';

    
    update_post_meta($post->ID, "titulo_banner", sanitize_text_field($titulo_banner));
    update_post_meta($post->ID, "subtitulo_banner", sanitize_text_field($subtitulo_banner));
}

add_action('save_post', 'save_details_banner');
?>