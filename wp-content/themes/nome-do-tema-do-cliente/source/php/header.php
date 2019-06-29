
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>
        <?php
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
        ?>
    </title>

    <!--META TAG SEO-->
    <meta name="robots" content="index, follow"/>
    <!--GALERIA DE IMAGEM PADRÃO USADA-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css"/>
    <!--ESTILO DO SITE-->
    <link rel="stylesheet" href="<?= get_stylesheet_directory_uri() ?>/dist/css/style.css">

</head>
<body>
<header>
    <!-- <nav class="barra_de_navegacao_fixa">
        <div class="container no-gutters">

            <div class="menu-mobile">
                <a href="<?php echo home_url(); ?>/home">
                    <img class="logo_empresa mobile" src="<?= get_stylesheet_directory_uri() ?>/dist/img/logo.png"
                         alt="">
                </a>
                <div class="wrapper">
                    <button id="bt-menu-mobile">
                        <span class="top"></span>
                        <span class="middle"></span>
                        <span class="bottom"></span>
                    </button>
                    <div class="clear"></div>
                </div>
                <span id="wrapper-menu-mobile"></span>

            </div>


            <div class="links-da-barra-de-navegacao">
                <a href="<?php echo home_url(); ?>/home">
                    <img class="logo_empresa desktop" src="<?= get_stylesheet_directory_uri() ?>/dist/img/logo.png">
                </a>
                <ul class="itens_nav">
                    <li class="item_nav ativo"><a href="<?php echo home_url(); ?>/home">Home</a></li>
                    <li class="item_nav"><a href="<?php echo home_url(); ?>/pagina2">Link 2</a></li>
                    <li class="item_nav"><a href="<?php echo home_url(); ?>/pagina3">Link 3</a></li>
                    <li class="item_nav"><a href="<?php echo home_url(); ?>/pagina4">Link 4</a></li>
                    <li class="item_nav"><a href="<?php echo home_url(); ?>/pagina5">Link 5</a></li>
                    <li class="item_nav"><a href="<?php echo home_url(); ?>/contato">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav> -->

    <div class="navbar-master">
        <div class="container content-navbar">

            <img class="logo_empresa" src="<?= get_stylesheet_directory_uri() ?>/dist/img/logo_empresa.png">

            <div id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <div id="bg-menu-mobile">
                <ul>
                    <li class="item_nav"><a class="link" href="#inicio">Ínicio</a></li>
                    <li class="item_nav"><a class="link" href="#quem-sou">Quem Sou</a></li>
                    <li class="item_nav"><a class="link" href="#graduacoes">Graduações</a></li>
                    <li class="item_nav"><a class="link" href="#congresso-e-cursos">Congressos e Cursos</a></li>
                    <li class="item_nav"><a class="link" href="#na-midia">Na mídia</a></li>
                    <li class="item_nav"><a class="link" href="#contato">Contato</a></li>
                    <div class="rede-social-home d-md-none">
                        <a href="<?php the_field('rede-social-1') ?>">
                            <img src="<?= get_stylesheet_directory_uri() ?>/dist/img/facebook.png">
                        </a>
                        <a href="<?php the_field('rede-social-2') ?>">
                            <img src="<?= get_stylesheet_directory_uri() ?>/dist/img/instagram.png">
                        </a>
                    </div>
                </ul>
            </div>
        </div>
    </div>

</header>