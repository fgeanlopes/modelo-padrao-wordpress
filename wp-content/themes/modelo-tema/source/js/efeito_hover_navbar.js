//ADICIONA EFEITO AO A BARRA DE NAVEGAÇÃO AO ROLAR A TELA DO BROWSER
$(function() {
    var lastScrollTop = 0;
    $(window).scroll(function() {
        if ($(window).scrollTop() > 50) {

            var st = $(this).scrollTop();

            if (lastScrollTop - st < 0) {
                $(".barra_de_navegacao_fixa").addClass("scroll");
                $(".menu-mobile").addClass("scroll");


            } else {
                $(".barra_de_navegacao_fixa").removeClass("scroll");
                $(".menu-mobile").removeClass("scroll");
            }
            lastScrollTop = st;
        } else {
            $(".barra_de_navegacao_fixa").removeClass("scroll");
            $(".menu-mobile").removeClass("scroll");
        }
    });
});