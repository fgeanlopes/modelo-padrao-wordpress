
<?php get_header() ?>

<!--chama post-->
<?php the_post() ?>

<main>
    <section>
        <div class="box_single_post_blog_2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <h1 class="titulo_post_blog"><?php the_title(); ?></h1>
                        <p class="texto_descricao data_blog">
                            <?php echo $post_date = get_the_date('j F Y'); ?>
                        </p>
                        <div class="imagem_destaque_post">
                            <?php the_post_thumbnail('full')?>
                        </div>
                        <p><?php the_content() ?></p>
                    </div>
                    <div class="col-lg-3">
                        <div class="categiria d-none d-lg-flex">
                            <?php include 'include/categoria.php'?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

