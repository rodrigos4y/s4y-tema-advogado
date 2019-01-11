<?php

    $query = new WP_Query([
        'post_type'   => 'contatos'
    ]);
    while($query->have_posts()) : $query->the_post(); 

?>

<li><i class="fa fa-location-arrow" aria-hidden="true"></i>
    <h5>Endereço
        <span><?php
            $custom = get_post_custom();
            echo $custom["endereco"][0];
        ?></span>
    </h5>
</li>
<li><i class="fa fa-phone" aria-hidden="true"></i>
    <h5>Telefone 
        <span><?php
            $custom = get_post_custom();
            echo $custom["telefone"][0];
        ?></span>
    </h5>
</li>
<li><i class="fa fa-envelope-o" aria-hidden="true"></i>
    <h5>E-mail
        <span><?php
            $custom = get_post_custom();
            echo $custom["email"][0];
        ?></span>
    </h5>
</li>
<? endwhile; ?>