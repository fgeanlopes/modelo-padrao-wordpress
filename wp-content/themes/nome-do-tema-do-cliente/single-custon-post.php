<!-- LISTAR CUSTON POST PERSONALIZADO! --> <?php 
    $array_produtos = array(
        // NOME DO CUSTON POST
        'post_type' => 'Produtos',
        // QUANTIDADE DE NUMERO QUE SERÁ CAPITURADO
        'post_per_page' => 6,
    );
    $listar_produtos = new WP_Query($array_produtos);
?> <!-- LISTANDO PROPRIEDADES DO POST --> <?php if($listar_produtos->have_posts()) : while ($listar_produtos ->have_posts()) : $listar_produtos -> the_post();?> <p><?php the_title()?></p> <?php endwhile; else: endif;?> <?php wp_reset_query(); ?>