/*
 * Responsável pela busca AJAX de apenas
 * uma notícia.
 */
var id = 0;
$('document').ready(function () {
    $('#noticias button').click(function () {
//Botão clicado
        if ($.isNumeric($(this).attr('id'))) {
            id = $(this).attr('id');
            console.log(id);
//Reconstruição do identificador da notícia
            noticiaID = '#noticia' + id;
            console.log(noticiaID);
//Ajax método GET
            $.ajax({
                url: 'noticiaBD.php',
                type: 'GET',
                data: 'id=' + id,
                beforeSend: function () {
                    $(noticiaID).html("<div style='background-color:white;width:340px;'><img src='https://raw.githubusercontent.com/tarcnux/senaibrusque/master/img/aguarde-por-favor.gif'></div>");
                },
                success: function (retorno) {
                    $(noticiaID).html(retorno);
                }
            });
        }
    });
});
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


