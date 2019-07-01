<?php /* Template Name:#!*/ ?>

<?php get_header() ?>

<main>

    <?php include "inc/banner_inicial.php" ?>;

    <!--solucoes em fornecimento-->
    <section>
        <div class="box_home_2">
                <h1 class="titulo_seccao"><?php the_field('titulo_box_2') ?></h1>

            <?php 
                // array de captura de distribuição
                $array_produtos = array(
                    'post_type' => 'Produtos',
                    'post_per_page' => 6,
                );
                $listar_produtos = new WP_Query($array_produtos);
            ?>
            <ul class="d-none d-md-flex nav-produtos-tab container">
                <?php $contador_produto = 0; if($listar_produtos->have_posts()) : while ($listar_produtos ->have_posts()) : $listar_produtos -> the_post(); $contador_produto++; ?>
                    <li class="<?php echo  $contador_produto == 1 ? "active":"";?>">
                        <a class="link_nav_tab_produtos" href="#descricao_<?php echo $contador_produto ?>">    
                            <p><?php the_title()?></p>
                        </a>
                    </li>
                <?php endwhile; else: endif;?>
                <?php wp_reset_query(); ?>
            </ul>

            <?php $contador_produto = 0; if($listar_produtos->have_posts()) : while ($listar_produtos ->have_posts()) : $listar_produtos -> the_post(); $contador_produto++; ?>
                    <?php 
                        if($contador_produto%2==0){
                    ?>
                        <div class="linha_conteudo cor_no_fundo" id="descricao_<?php echo $contador_produto ?>">
                                <div class="container">
                            <div class="row">
                            <div class="col-md-6">
                                <div class="slide_produtos_home owl-carousel owl-theme">
                                    <?php if (have_rows('repetidor_box_single_produto_3')) : while (have_rows('repetidor_box_single_produto_3')) : the_row(); ?>
                                        <img src="<?php the_sub_field('item_repetidor_box_single_produto_3'); ?>">
                                    <?php endwhile; else : endif; ?>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h1 class="titulo_post"><?php the_title()?></h1>
                                <div class="descricao_produto"><?php the_excerpt(); ?></div>
                                <div class="seta_veja_mais">
                                    <p>Veja alguns exemplos</p>
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/dist/img/slide_produtos.png">
                                </div>
                                <div class="veja_mais">
                                    <a class="btn-padrao" href="<?php the_permalink(); ?>">
                                        <p>Veja Mais</p>
                                    </a>
                                </div>
                            </div>
                            </div>
                            </div>
                        </div>
                    <?php
                    }else{
                        ?>
                        <div class="row linha_conteudo container" id="descricao_<?php echo $contador_produto ?>">
                            <div class="col-md-6">
                                <h1 class="titulo_post"><?php the_title()?></h1>
                                <div class="descricao_produto"><?php the_excerpt(); ?></div>
                                <div class="seta_veja_mais">
                                    <p>Veja alguns exemplos</p>
                                    <img src="<?php echo get_stylesheet_directory_uri() ?>/dist/img/slide_produtos.png">
                                </div>
                                <div class="veja_mais">
                                    <a class="btn-padrao" href="<?php the_permalink(); ?>">
                                        <p>Veja Mais</p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="slide_produtos_home owl-carousel owl-theme">
                                    <?php if (have_rows('repetidor_box_single_produto_3')) : while (have_rows('repetidor_box_single_produto_3')) : the_row(); ?>
                                        <img src="<?php the_sub_field('item_repetidor_box_single_produto_3'); ?>">
                                    <?php endwhile; else : endif; ?>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                        ?>
            <?php endwhile; else: endif;?>
            <?php wp_reset_query(); ?>
            </div>
    </section>

    <!--Vatagens-->
    <section>
        <div class="box_home_3">
            <div class="container">
                <div class="row">
                    <?php if (have_rows('repetidor_box_home_3')) : while (have_rows('repetidor_box_home_3')) : the_row(); ?>
                        <div class="col-sm-6 col-lg-3">
                            <div class="item_content_box_home_3">
                                <img src="<?php the_sub_field('icone_repetidor_box_home_3'); ?>">
                                <p class="titulo_icone_repetidor"><?php the_sub_field('titulo_icone_repetidor_box_home_3') ?></p>
                                <p class="descricao_icone_repetidor"><?php the_sub_field('descricao_icone_repetidor_box_home_3') ?></p>
                            </div>
                        </div>
                    <?php endwhile; else : endif; ?>
                </div>
            </div>
        </div>
    </section>


    <!--sobre nos-->
    <section>
        <div class="box_home_4">
            <div class="container">
                <div class="row alinha_coluna_top">
                    <div class="col-lg-6">
                        <h1><?php the_field('titulo_box_4') ?></h1>
                        <p class="descricao_box_4"><?php the_field('descricao_box_4') ?></p>
                        <button class="btn-padrao">
                            <!--                    *** Adicionar seta no after-->
                            <a href="<?php echo home_url(); ?>/sobre">Conheça</a>
                            <img class="seta_btn" src="<?= get_stylesheet_directory_uri() ?>/dist/img/seta_btn.png">
                        </button>
                    </div>
                    <div class="col-lg-6 no-gutters">
                        <iframe class="video_vimeo"
                                src="https://player.vimeo.com/video/183882697?title=false&byline=false&transparent=false"
                                width="100%" height="355" frameborder="0"
                                allow="autoplay; fullscreen" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--qualidade e engenharia-->
    <section>
        <div class="box_home_5">
            <div class="container">
                <h1><?php the_field('titulo_box_5') ?></h1>
                <p><?php the_field('descricao_box_5') ?></p>
            </div>
        </div>
    </section>

    <!--informações-->
    <section>
        <div class="box_home_6">
            <div class="container">
                <h1><?php the_field('titulo_box_6') ?></h1>

            <!-- Captura os post -->
            <?php
                // Parametros da captura
                $array_post = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                );
                // varivel que ira listar os post
                $listar_post = new WP_Query($array_post);
            ?>

            
                <?php if ($listar_post->have_posts()) : while ($listar_post->have_posts()) : $listar_post->the_post(); ?>
                
                    <div class="item-post">
                    <div class="row alinhar_conluna_centro">
                        <div class="col-lg-4">
                            <div class="box-img-blog">
                                <a href="<?php the_permalink(); ?>">
                                    <img  src="<?= $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 conteudo-do-blog">
                            <p class="data-blog">
                                <?php $post_date = get_the_date('j F , Y');
                                echo $post_date; ?>
                            </p>
                            <h3 class="titulo-blog">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <div class="descricao_texto_blog">
                                <?php the_excerpt(); ?>
                            </div>
                            <div class="leia_mais_botao">
                                <a href="<?php the_permalink(); ?>">
                                    <p>Leia mais</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    </div>
                <?php endwhile; ?>
                <?php else: endif; ?>
            <?php wp_reset_query(); ?>
            
        </div>
    </section>

    <!--nossos clientes-->
    <section>
        <div class="box_home_7">
            <h1 class="titulo_box_7"><?php the_field('titulo_box_7') ?></h1>
            <div class="container_slide_box_7">
                <div class="conteudo_slide_box_7">
                    <div class="slide_clientes owl-carousel owl-theme ">
                        <!--                <div class="container">-->
                        <?php if (have_rows('repetidor_box_home_7')) : while (have_rows('repetidor_box_home_7')) : the_row(); ?>
                            <img src="<?php the_sub_field('item_repetidor_box_home_7'); ?>">
                        <?php endwhile; else : endif; ?>
                        <!--                </div>-->
                    </div>
                </div>
            </div>

        </div>
    </section>

    <?php include "inc/formulario_de_contato_footer.php" ?>;

</main>

<?php get_footer() ?>