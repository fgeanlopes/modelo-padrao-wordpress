<?php get_header() ?> <main class="post"><section class="box-1"><div class="container"><img class="img-fluid" alt="<?php the_title(); ?>" src="<?= $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"></div></section><section class="box-2"><div class="container"><div class="content-titulo-post-destaque"><div class="categoria-do-post"><div class="cat-post"> <?php $cat = get_the_category($post_ID);
                        foreach ($cat as $category) {
                            echo '<a class="descricao" href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                        }
                        ?> <?php wp_reset_query(); ?> </div><div class="data-do-post"> <?php $post_date = get_the_date('d/m/20y');
                        echo '<p class="descricao"> - ' . "$post_date" . ' </p>' ?> </div></div></div><div class="row"><div class="col-12 col-md-8 feed-post-blog"><h1 class="titulo"><?php the_title() ?></h1><div class="descricao conteudo-post"> <?php the_content(); ?> </div></div><div class="d-none d-md-block col-md-4"><div class="content-categoria-post"><p class="titulo tag">Tags</p> <?php include 'include/categoria.php' ?> </div></div></div></div></section><section class="box-3"><div class="outros-posts"> <?php
            $postId = get_the_ID();
            $last_post_blog = array(
                'post_type' => 'post_blog',
                'posts_per_page' => 3,
                'post__not_in' => array($postId),
            );
            $last_post_blog_ = new WP_Query($last_post_blog);
            ?> <div class="container"><div class="row"><div class="col-12 col-lg-2"><h5 class="titulo texto_mais">Mais</h5></div><div class="col-12 col-lg-10"><div class="row"> <?php if ($last_post_blog_->have_posts()) : while ($last_post_blog_->have_posts()) : $last_post_blog_->the_post(); ?> <div class="col-12 col-md-6 col-lg-4 item-outros-posts"><div class="card-outros-posts"><a href="<?php the_permalink(); ?>"><div class="content-img"><img class="img-fluid" alt="<?php the_title(); ?>" src="<?= $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID)); ?>"></div></a><h1 class="titulo"><?php the_title() ?></h1></div></div> <?php endwhile; ?> <?php else : get_404_template();
                            endif; ?> <?php wp_reset_query(); ?> </div></div></div></div></div></section> <?php get_footer() ?> </main>