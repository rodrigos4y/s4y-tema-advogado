<?
    add_action('init', 'sobre_register');

    function sobre_register(){
        $descritivos = array(
            'name' => 'Sobre',
            'singular_name' => 'Sobre',
            'add_new' => 'Adicionar Nova Descrição Sobre',
            'add_new_item' => 'Adicionar Sobre',
            'edit_item' => 'Editar Sobre',
            'new_item' => 'Novo Sobre',
            'view_item' => 'Ver Sobre',
            'search_items' => 'Procurar Sobre',
            'not_found' => 'Nenhuma descrição Sobre encontrada',
            'not_found_in_trash' => 'Nenhum Sobre na Lixeira',
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
            'supports' => array('title', 'editor', 'thumbnail')
        );

        register_post_type('sobre', $args);
        flush_rewrite_rules();
    }

    

?>