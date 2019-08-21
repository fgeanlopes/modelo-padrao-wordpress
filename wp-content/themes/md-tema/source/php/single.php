<?php get_header() ?>
<main class="post">

    <section class="box-1">
        <div class="container">
            <h1 class="titulo titulo-post"><?php the_title() ?></h1>

            <div class="row">
                <div class="col-12 col-md-8">
                    <img class="img-fluid" alt="<?php the_title(); ?>"
                         src="<?= get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>">
                </div>
                <div class="d-none d-md-block col-md-4 posts-relacionados">
                    <!--                    <div class="outros-posts">-->
                    <?php
                    $postId = get_the_ID();
                    $last_post_blog = array(
                        'post_type' => 'post',
                        'posts_per_page' => 3,
                        'post__not_in' => array($postId),
                    );
                    $last_post_blog_ = new WP_Query($last_post_blog);
                    ?>
                    <!--                        <div class="container">-->
                    <div class="row">
                        <div class="col-12">
                            <h2 class="titulo titulo-widget">Postagens Relacionadas</h2>
                        </div>
                        <div class="col-12">
                            <?php if ($last_post_blog_->have_posts()) : while ($last_post_blog_->have_posts()) : $last_post_blog_->the_post(); ?>
                                <div class="row content-posts-relacionados">
<!--                                    <div class="col-lg-12">-->
<!--                                        <div class="card-outros-posts">-->
<!--                                            <div class="row">-->
                                                <div class="col-12 col-lg-4">
                                                    <a href="<?php the_permalink(); ?>">
<!--                                                        <div class="content-img">-->
                                                            <img class="img-fluid" alt="<?php the_title(); ?>"
                                                                 src="<?= get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>">
<!--                                                        </div>-->
                                                    </a>
                                                </div>
                                                <div class="col-12 col-lg-8">
                                                    <h1 class="titulo titulo-posts-relacionados"><?php the_title() ?></h1>
                                                </div>
<!--                                            </div>-->
<!--                                        </div>-->
<!--                                    </div>-->
                                </div>
                            <?php endwhile; ?>
                            <?php else : get_404_template();
                            endif; ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>
                    <!--                        </div>-->
                    <!--                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <section class="box-2">
        <div class="container">


            <div class="row">
                <div class="col-12 col-md-8 feed-post-blog">
                    <h1 class="titulo"><?php the_title() ?></h1>

                    <div class="categoria-do-post">

                        <div class="data-do-post">
                            <?php $post_date = get_the_date('d/m/20y');
                            echo '<p class="descricao"> Postado em : ' . "$post_date" . ' </p>' ?>
                        </div>

                        <div class="cat-post">
                            <?php $cat = get_the_category($post_ID);
                            foreach ($cat as $category) {
                                echo '<a class="descricao" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                            }
                            ?>
                            <?php wp_reset_query(); ?>
                        </div>
                    </div>

                    <div class="descricao conteudo-post">
                        <?php the_content(); ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <?php get_footer() ?>
</main>
