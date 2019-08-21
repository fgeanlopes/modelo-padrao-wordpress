<!-- BUSCAR CATEGORIA DE POST -->
<?php $terms = get_terms(array(
    'taxonomy' => 'category',
    'hide_empty' => false,
)); ?>

<?php foreach ($terms as $term) {
    echo '<a href="' . get_term_link($term->term_id) . '"><p class="item-categoria">' . $term->name . '</p></a>';
} ?>