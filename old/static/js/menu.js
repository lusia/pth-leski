/**
 * @author serek
 */
function changeMenuPicture(obj, img){
	obj.style.backgroundImage = 'url(static/img/' +img +'.png)';
}

function changePage(page){
	window.location.href = page;
}

window.addOnloadEvent = function(addToOnload){
    var oldOnload;
    if (window.onload) {
        oldOnload = window.onload;
        window.onload = function(){
            oldOnload();
            addToOnload();
        };
    }
    else {
        window.onload = addToOnload;
    }   
}
