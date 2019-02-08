<?php

    $query = new WP_Query([
        'post_type'   => 'contatos'
    ]);
    while($query->have_posts()) : $query->the_post();
        global $post;

        $endereco = get_post_meta($post->ID, 'endereco', true);
        $telefone = get_post_meta($post->ID, 'telefone', true);
        $email = get_post_meta($post->ID, 'email', true);

?>

<li><i class="fa fa-location-arrow" aria-hidden="true"></i>
    <h5>Endereço
        <span><?php echo $endereco; ?></span>
    </h5>
</li>
<li><i class="fa fa-phone" aria-hidden="true"></i>
    <h5>Telefone 
        <span><?php echo $telefone; ?></span>
    </h5>
</li>
<li><i class="fa fa-envelope-o" aria-hidden="true"></i>
    <h5>E-mail
        <span><?php echo $email; ?></span>
    </h5>
</li>
<? endwhile; ?>