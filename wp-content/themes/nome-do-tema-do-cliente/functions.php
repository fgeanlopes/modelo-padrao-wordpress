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
  //remove_menu_page( 'users.php' );                  //Users
  remove_menu_page( 'tools.php' );                  //Tools
  //remove_menu_page( 'options-general.php' );        //Settings
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

    acf_add_options_page();

}


?>