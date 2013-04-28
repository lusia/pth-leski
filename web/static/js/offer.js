$(function () {
    var $offerLinks = $('div#offer img');

    $offerLinks.mouseover(function () {
        var src = $(this).attr('src').replace('.', '-grey.');
        $(this).attr('src', src);
    });
    $offerLinks.mouseleave(function () {
        var src = $(this).attr('src').replace('-grey', '');
        $(this).attr('src', src);
    });
});