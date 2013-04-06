 $(document).ready(function(){
    $('img.showAble').each(function(i){
        $(this).mouseover(function(){
            txt = 'static/img/schuco/kolektory_sloneczneXXX.png';
            $('img#show').attr('src', txt.replace('XXX', this.id.substr(2)));
        })
    })
 })