<?php /* Template Name: Blog */ ?>

<main class="blog">
    <?php get_header() ?>


    <section class="box-1">
        <?php
        $last_post_blog = array(
            'post_type' => 'post',
            'posts_per_page' => 3,
        );
        $last_post_blog_ = new WP_Query($last_post_blog);
        ?>
        <div class="slide-page-blog owl-carousel owl-theme">
            <?php if ($last_post_blog_->have_posts()) : while ($last_post_blog_->have_posts()) : $last_post_blog_->the_post(); ?>
                <div class="item-post-recente">
                    <div class="imagem-destaque-blog">
                        <img class="img-destaque-blog" alt="<?php the_title(); ?>"
                             src="<?= get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>">
                    </div>
                    <div class="container">

                        <div class="content-titulo-post-destaque">
                            <div class="titulo-post-destaque">

                                <a href="<?php the_permalink(); ?>">
                                    <h1 class="titulo"><?php the_title() ?></h1>
                                </a>

                                <div class="cat-post">
                                    <?php
                                    $cat = get_the_category($post_ID);
                                    foreach ($cat as $category) {
                                        echo '<a class="descricao" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                                    }
                                    ?>
                                </div>


                            </div>
                            <div class="descricao descricao-post-destaque">
                                <?php the_excerpt(); ?>
                            </div>

                            <div class="leia-mais-botao-post">
                                <a href="<?php the_permalink(); ?>">
                                    <p class="titulo">POST COMPLETO</p>
                                </a>
                            </div>
                        </div>


                    </div>
                </div>
            <?php endwhile; ?>
            <?php else : get_404_template();
            endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </section>


    <section class="box-2">
        <div class="container">
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
            <div class="row">
                <div class="col-12 col-md-8">

                    <?php if ($query_post_blog->have_posts()) : while ($query_post_blog->have_posts()) :
                        $query_post_blog->the_post(); ?>
                        <div class="row item-post-feed">
                            <div class="col-12 col-md-5">
                                <div class="item-post feed-blog">
                                    <a href="<?php the_permalink(); ?>">
                                        <div class="imagem_destaque_blog">
                                            <img src="<?= get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>">
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-12 col-md-7">

                                <h1 class="titulo"><?php the_title(); ?></h1>

                                <div class="descricao">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div class="link-post-e-categoria">
                                    <div class="leia-mais-botao-post">
                                        <a href="<?php the_permalink(); ?>">
                                            <p class="titulo post-completo">POST COMPLETO</p>
                                        </a>
                                    </div>

                                    <div class="descricao categoria data-blog">
<!--                                        <div class="cat-post">-->
<!--                                            --><?php
//                                            $cat = get_the_category($post_ID);
//                                            foreach ($cat as $category) {
//                                                echo '<a class="descricao" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
//                                            }
//                                            ?>
<!--                                        </div>-->
                                        <?php $post_date = get_the_date('d/m/20y');
                                        echo '<p class="descricao"> ' . "$post_date" . ' </p>' ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php else : get_404_template();
                    endif; ?>
                    <?php wp_reset_query(); ?>
                    <?php previous_posts_link('<p class="botao-blog">Posts Mais Recentes</p>') ?>
                    <?php next_posts_link('<p class="botao-blog">Mostar Mais</p>', $query_post_blog->max_num_pages) ?>
                </div>
                <div class="col-12 col-md-4">
                    <div class="d-none d-md-block col-md-4">
                        <div class="content-categoria-post">
                            <p class="titulo tag">Tags</p>
                            <?php include 'include/categoria.php' ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php get_footer() ?>
</main>