$(function (){
    $('#filemanager-bi').show();

    var windowHeight = $(window).height() - 100;
    $('.filemanager-bi-container').css('height',windowHeight+'px')

    $( window ).resize(function() {
         windowHeight = $(window).height() - 100;
        $('.filemanager-bi-container').css('height',windowHeight+'px')
    });
})
