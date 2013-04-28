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
    
    $("a[rel^='prettyPhoto']").prettyPhoto({
        social_tools : ''
    }); 
    
    $('#offer > a img.jqs-solar').click(function () {
        $('#offer > div a img.jqs-solar:first').click();
    });
});