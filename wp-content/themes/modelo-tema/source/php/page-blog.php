<?php /* Template Name: Blog */ ?>

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
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $my_post_blog = array(
                    'post_type' => 'post',
                    'rewrite' => true,
                    'paged' => $paged,
                    'posts_per_page' => 3,
                );
                $query_post_blog = new WP_Query($my_post_blog);
                ?>

                <!-- RESULTO DA BUSCA DE POST -->
                <div class="col-12 col-md-8">
                    <?php if ($query_post_blog->have_posts()) : while ($query_post_blog->have_posts()) : $query_post_blog->the_post(); ?>
                            <div class="item-post feed-blog">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="imagem_destaque_blog">
                                        <?php the_post_thumbnail('full') ?>
                                    </div>
                                </a>
                                <p class="texto_descricao data-blog">
                                    <?php $post_date = get_the_date('j F , Y');
                                    echo $post_date; ?>
                                </p>
                                <h3 class="titulo_principal titulo-blog">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h3>
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