//FUNCAO PARA ADICIONAR O ESPAÇO AUTOMATICAMENTE DA BARRA DE NAVEGAÇÃO PARA EVITAR A SOBREPOSIÇÃO
function barraNav() {
    let heightNav = $('.barra_de_navegacao_fixa').innerHeight();
    $('.box-home-1').css('margin-top', heightNav);
}
barraNav();

//REEXECUTA A FUNCAO AO REDIMENCIONAR A TELA
window.onresize=function() {
    barraNav();
};