// REMOVER CLASS E ADICONAR AO ITEM CLICADO
$('.nav_produtos').click(function () {
    $('.content_descricao_icones').removeClass('active');
    $('#' + $(this).attr('referencia')).addClass('active');
});

$('.link_nav_tab_produtos').click(function (e){
    e.preventDefault();
    var id = $(this).attr('href');
    var tamanhonav = $('.navbar_master').innerHeight() + 20;
    retorno = $(id).offset().top;
    $("html,body").animate({
        scrollTop: retorno - tamanhonav
    }, 600)
    $('.nav-produtos-tab li').removeClass('active');
    $(this).parent().addClass( "active" );
});

// ANIMAÇÃO PARA CORRER ENTRE OS LINK DA PAGINA
$(".item_nav .informacao").click(function (e){
    e.preventDefault();
    var id = $(this).attr('href');
    var tamanhonav = $('.navbar_master').innerHeight() + 20;
    retorno = $(id).offset().top;
    $("html,body").animate({
        scrollTop: retorno - tamanhonav
    }, 600)
});
