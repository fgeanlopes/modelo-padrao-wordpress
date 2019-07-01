<!DOCTYPE html><html lang="pt-BR"><head><meta charset="utf-8"><meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no"><title> <?php
        if (is_home()): bloginfo('name');
        elseif (is_category()): single_cat_title();
            echo ' - ';
            bloginfo('name');
        elseif (is_single()): single_post_title();
            echo ' - ';
            bloginfo('name');
        elseif (is_page()): single_post_title();
            echo ' - ';
            bloginfo('name');
        else: wp_title('', true);
        endif;
        ?> </title> <?php wp_head();?> <!--META TAG SEO--><meta name="robots" content="index, follow"><!--GALERIA DE IMAGEM PADRÃO USADA--><!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/> --><!--ESTILO DO SITE--><link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/dist/css/style.css"></head><body><header><div class="navbar-master"><div class="container content-navbar"><img class="logo_empresa" src="<?= get_stylesheet_directory_uri() ?>/dist/img/logo_empresa.png"><div id="hamburger"><span></span> <span></span> <span></span></div><div id="bg-menu-mobile"><ul><li class="item_nav"><a class="link" href="#inicio">Ínicio</a></li><li class="item_nav"><a class="link" href="#sobre">sobre</a></li><li class="item_nav"><a class="link" href="#">link3</a></li><li class="item_nav"><a class="link" href="#">link4</a></li><li class="item_nav"><a class="link" href="#">link5</a></li><li class="item_nav"><a class="link" href="#">link6</a></li><div class="rede-social-home d-md-none"><a href="<?php the_field('rede-social-1') ?>"><img src="<?= get_stylesheet_directory_uri() ?>/dist/img/facebook.png"> </a><a href="<?php the_field('rede-social-2') ?>"><img src="<?= get_stylesheet_directory_uri() ?>/dist/img/instagram.png"></a></div></ul></div></div></div></header></body></html>