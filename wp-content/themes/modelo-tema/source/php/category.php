<?php get_header() ?>

<main>
    <section class="blog_box_1">
        <div class="position-relative" style="background: url('<?php the_field('blog_box_1') ?>)">
            <h1 class="titulo_seccao">BLOG</h1>
        </div>
    </section>
    <section class="blog_box_2">
        <div class="container">
            <div class="row">
                <!-- BUSCAR OS POST NO BANCO -->

                <!-- RESULTO DA BUSCA DE POST -->
                <div class="col-12 col-md-8">
                    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                            <div class="item-post feed-blog">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="imagem_destaque_blog">
                                        <img class="img-fluid" src="<?= $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>">
                                    </div>
                                </a>

                                <p class="texto_descricao data-blog">
                                    <?php $post_date = get_the_date('j F , Y');
                                    echo $post_date; ?>
                                </p>

                                <a href="<?php the_permalink(); ?>">
                                    <h3 class="titulo_principal titulo-blog">
                                        <?php the_title(); ?>
                                    </h3>
                                </a>

                                <div class="texto_descricao descricao-texto-blog">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div class="leia-mais-botao-post">
                                    <a href="<?php the_permalink(); ?>">
                                        <p class="texto_descricao">Leia mais</p>
                                    </a>
                                </div>

                            </div>

                        <?php endwhile; ?>

                    <?php else : get_404_template();
                    endif; ?>

                    <?php wp_reset_query(); ?>
                    <!--BOTÃO PAGINAS PROXIMA E ANTERIOR-->
                    <section>
                        <button class="botao-blog">
                            <span>
                                <?php previous_posts_link('Posts Anterior') ?>
                            </span>
                        </button>
                        <button class="botao-blog">
                            <span>
                                <?php next_posts_link('Ver Mais', $query_post_blog->max_num_pages) ?>
                            </span>
                        </button>
                    </section>
                </div>

                <!-- LATERAL DOS POSTS -->
                <div class="col-12 col-md-4">
                    <?php include 'include/categoria.php' ?>
                </div>
            </div>
        </div>
    </section>
</main>

<?php get_footer() ?>