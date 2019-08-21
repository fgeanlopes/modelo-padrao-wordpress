<?php

//REMOVE OPÇÕES DO PAINEL
function remove_menus(){
    remove_menu_page('index.php'); //Painel de controle
//	remove_menu_page ('edit.php'); //Postagens
    remove_menu_page('edit-comments.php'); //Comentários
    remove_menu_page('themes.php'); //Aparência
    remove_menu_page('tools.php'); //Ferramentas
}

add_action('admin_menu', 'remove_menus');


//ATIVA A OPÇÃO DE THUMB
add_theme_support('post-thumbnails', array(
    'post',
    'ex_1',
));

//DEFININDO TAMANHO DO RESUMO POST
add_filter('excerpt_length', function ($length) {
    return 45;
});

//OPTIONS ACF
if (function_exists('acf_add_options_page')) {
    acf_add_options_page('Inf. Gerais ACF');
}

//CUSTON POST
function ct_ex_1()
{
    register_post_type('ex_1', [
            'labels' => [
                'name' => "ex_1",
                'singular_name' => "ex_1"
            ],
            'public' => true,
            'supports' => array('title', 'thumbnail'),
            'rewrite' => array(
                'slug' => 'ex_1/'
            ),
        ]
    );
}

add_action('init', 'ct_ex_1');


//Caterory personalizada -> Taxonomy
function cat_ex_1()
{
    $labels = array(
        'name' => _x('cat_ex_1', 'Taxonomy General Name', 'text_domain'),
        'singular_name' => _x('cat_ex_1', 'Taxonomy Singular Name', 'text_domain'),
        'menu_name' => __('cat_ex_1', 'text_domain'),
    );
    $args = array(
        'labels' => $labels,
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_admin_column' => true,
        'show_in_nav_menus' => true,
        'show_tagcloud' => true,
    );
    register_taxonomy('taxonomy', array('ex_1'), $args);
}

add_action('init', 'cat_ex_1', 0);


?>