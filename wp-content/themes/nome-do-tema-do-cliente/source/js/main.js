$("#bt-menu-mobile").click(function(){
    $(this).toggleClass("close-bt-hamburguer");
    $(".links-da-barra-de-navegacao").slideToggle();
});


function barra_mobile() {
    let heightNavMobile = $('.barra_de_navegacao_fixa').innerHeight();

    $('.box_1_home').css('margin-top', heightNavMobile);
}

function barra_desktop() {
    let heightNavDesktop = $('.barra_de_navegacao_fixa').innerHeight();
    $('.box_1_home').css('margin-top', heightNavDesktop);

}

function barraNav() {
    if(window.innerWidth >= 992){
        barra_desktop();
    }else{
        barra_mobile();
    }
}

barraNav();

window.onresize=function() {
    barraNav();
};


$caminho_do_logo_scroll = "<?php echo get_stylesheet_directory_uri() ?>/dist/img/logo_empresa_branco.png";

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
