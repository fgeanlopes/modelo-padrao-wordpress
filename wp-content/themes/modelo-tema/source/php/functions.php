<?php
add_theme_support( 'post-thumbnails', array( 'post'));

function wpdocs_remove_menus(){
  add_filter('show_admin_bar', '__return_false');   // remove barra superior wordpress
  remove_menu_page( 'index.php' );                  //Dashboard
  remove_menu_page( 'jetpack' );                    //Jetpack* 
  remove_menu_page( 'edit.php' );                   //Posts
  remove_menu_page( 'upload.php' );                 //Media
  remove_menu_page( 'edit.php?post_type=page' );    //Pages
  remove_menu_page( 'edit-comments.php' );          //Comments
  remove_menu_page( 'themes.php' );                 //Appearance
  remove_menu_page( 'plugins.php' );                //Plugins
  //remove_menu_page( 'users.php' );                //Users
  remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );      //Settings
  remove_menu_page( 'edit.php?post_type=acf-field-group' );		// remove acf menu
  remove_menu_page( 'wpcf7' );						// remove contact form menu
}
//add_action( 'admin_menu', 'wpdocs_remove_menus' );

add_theme_support( 'post-thumbnails' );

//DEFININDO TAMANHO DO RESUMO POST
add_filter('excerpt_length', function ($length) {
    return 45;
});


//DIFININDO ESTILO DA PAGINAÇÃO
add_filter('next_posts_link_attributes', 'post_link_attributes');
add_filter('previous_posts_link_attributes', 'post_link_attributes');

//OPTIONS ACF
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page('Inf. Gerais ACF');
}


// Register Custom Post Type
function produtos(){
  $labels = array(
      'name' => _x('Produtos', 'post type general name'),
      'singular_name' => _x('Produtos', 'post type general name'),
      'add_new' => _x('Adicionar Novo', 'Novo item'),
      'add_new_item' => __('Novo Item'),
      'edit_item' => __('Editar Item'),
      'new_item' => __('Novo Item'),
      'view_item' => __('Ver Item'),
      'search_items' => __('Procurar Itens'),
      'not_found' => __('Nenhum registro encontrado'),
      'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
  );
  $args = array(
      'label' => __('Post Type', 'text_domain'),
      'description' => __('Post Type Description', 'text_domain'),
      'labels' => $labels,
      'public' => true,
      'post-thumbnails' => true,
      'rewrite' => true,
      'show_ui' => true,
      'show_in_menu' => true,
      'capability_type' => 'page',
      'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
      // 'rewrite' => array (
      //     'slug'=>'produtos_produtos'
      // )
  );
  register_post_type('produtos', $args);
}
add_action('init', 'produtos');


// Register Custom Taxonomy
function categoria_de_produtos(){
  $labels = array(
      'name' => _x('Categoria de produto', 'Taxonomy General Name', 'text_domain'),
      'singular_name' => _x('Categoria de produto', 'Taxonomy Singular Name', 'text_domain'),
      'add_new' => _x('Adicionar Novo', 'Novo item'),
      'add_new_item' => __('Novo Item'),
      'edit_item' => __('Editar Item'),
      'new_item' => __('Novo Item'),
      'view_item' => __('Ver Item'),
      'search_items' => __('Procurar Itens'),
      'not_found' => __('Nenhum registro encontrado'),
      'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
  );
  $args = array(
      'labels' => $labels,
      'hierarchical' => false,
      'public' => true,
      'show_ui' => true,
      'show_admin_column' => true,
      'show_in_nav_menus' => true,
      'show_tagcloud' => true,
      'rewrite' => true,
      'rewrite' => array (
          'slug'=>'produtos'
      )
  );
  
  register_taxonomy('categoria_de_produtos', array('produtos'), $args);
}
add_action('init', 'categoria_de_produtos');

?>