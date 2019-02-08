<?
    add_action('init', 'area_register');

    function area_register(){
        $descritivos = array(
            'name' => 'Áreas',
            'singular_name' => 'Área',
            'add_new' => 'Adicionar Nova Área',
            'add_new_item' => 'Adicionar Área',
            'edit_item' => 'Editar Área',
            'new_item' => 'Nova Área',
            'view_item' => 'Ver Área',
            'search_items' => 'Procurar Área',
            'not_found' => 'Nenhuma Área encontrada',
            'not_found_in_trash' => 'Nenhuma Área na Lixeira',
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

        register_post_type('areas', $args);
        flush_rewrite_rules();
    }

    register_taxonomy(
        "categorias", 
            "areas", 
            array(            
                "label" => "Categorias", 
                "singular_label" => "Categoria", 
                "rewrite" => true,
                "hierarchical" => true
            )
    );

    add_action("admin_init", "admin_init_area");

    function admin_init_area(){
        add_meta_box("area-meta", "Área", "area", "areas", "normal", "low");
    }
    function area(){
        global $post;

        $area_title = get_post_meta($post->ID, 'area-title', true);
        $area_valor = get_post_meta($post->ID, 'area-valor', true);
?>
        <p>
            <label>Área: </label>
            <input name="area-title" type="text" value="<? echo $area_title; ?>">
        </p>
        <p>
            <label>Valor do Conhecimento: </label>
            <input name="area-valor" type="text" value="<? echo $area_valor; ?>">
        </p>
<?
    }

    //Salvar os valores no post
    

    function save_details_area(){
        global $post;

        $area_title = isset($_POST['area-title']) ? $_POST['area-title'] : '';
        $area_valor = isset($_POST['area-valor']) ? $_POST['area-valor'] : '';

        if($post && $post->post_type && $post->post_type == 'areas') {
            update_post_meta($post->ID, 'area-title', $area_title);
            update_post_meta($post->ID, 'area-valor', $area_valor);
        }
    }

    add_action('save_post', 'save_details_area');

?>