$(function (){
    var addressPart = window.location.href.split('/'),
        href = addressPart.slice(0, 4).join('/');

    href = href.split('#')[0];

    $(".rslides").responsiveSlides();

    //find active menu
    $('div.menu a').map(function() {
        var $this = $(this);
        
        if ($this.attr('href') === href) {
            $this.parent('div').addClass('active').removeClass('off');
        }
    });
    
    //highlight menu
    $('div.menu').mouseover(function () {
        $(this).css('backgroundImage', 'url(/static/images/menu_on.png)');
    });
    $('div.menu').mouseleave(function () {
        var image = 'url(/static/images/menu_off.png)';
        if ($(this).hasClass('active')) {
            image = 'url(/static/images/menu_active.png)';
        } 
        $(this).css('backgroundImage', image);
    });
    
    //active menu
    $('div.menu').click(function () {
        window.location = $(this).children('a').attr('href');
    });


    $(".showAble").mouseover(function(){
        $("#show").attr("src", this.src);
    });

});