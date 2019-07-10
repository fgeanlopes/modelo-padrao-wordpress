<!--    BARRA DE BUSCA--> <?php dynamic_sidebar('busca'); ?> <?php wp_reset_query(); ?> <!-- BUSCAR CATEGORIA DE POST --> <?php
$terms = get_terms(array(
    // pegar o nome da categoria/taxonomia
    'taxonomy' => 'category',

    // se for vazio mostra
    'hide_empty' => false,

    // ORDEM DE APRESENTAÇÃO 
    'order' => 'DESC',
));

?> <div class="itens-categoria estilo-do-box"><ul class="d-flex flex-column"> <?php
        foreach ($terms as $term) {
            echo '<li class="texto_descricao"> <a href="' . get_term_link($term->term_id) . '">' . $term->name . '</a></li>';
        }
        ?> </ul></div>