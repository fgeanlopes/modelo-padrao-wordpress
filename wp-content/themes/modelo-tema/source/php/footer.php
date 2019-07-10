<footer>
    <div class="row">
      <div class="col-12 col-md-12 col-lg-4">
        <img clas="img_logo_footer" src="<?php the_field('logo_footer')?>">
      </div>

      <div class="col-12 col-md-12 col-lg-4 content-footer">
        <p><?php the_field('endereco')?></p>
        <p><?php the_field('telefone')?></p>
        <p><?php the_field('whatsapp')?></p>
      </div>
    </div>

    <div class="desenvolvimento">
      <?php $nome_dev = 'EMPRESA X' ?>
      <?php $link_dev = 'www.google.com.br' ?>
      <?php $nome_do_cliente = 'Nome do cliente' ?>
      <p>Todos os direitos reservados © a <?php echo $nome_do_cliente ?> Desenvolvidor por <a target="_blank" href="<?php echo $link_dev?>"><?php echo $nome_dev?></a><?php echo $date_footer = get_the_date('Y'); ?></p>
    </div>

</footer>


<!-- //Funcionamento meu mobile "navbar.js" -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.2/TweenMax.min.js'></script>
<script src="<?php bloginfo('template_url'); ?>/dist/js/app.js"></script>


<?php wp_footer();?>
</body>
</html>