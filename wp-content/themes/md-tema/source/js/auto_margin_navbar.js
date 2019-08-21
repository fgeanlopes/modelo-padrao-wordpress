//FUNCAO PARA ADICIONAR O ESPAÇO AUTOMATICAMENTE DA BARRA DE NAVEGAÇÃO PARA EVITAR A SOBREPOSIÇÃO
function barraNav() {
    let heightNav = $('.navbar-master').innerHeight();
    $('.box-1').css('margin-top', heightNav);
}
barraNav();

//REEXECUTA A FUNCAO AO REDIMENCIONAR A TELA
window.onresize=function() {
    barraNav();
};