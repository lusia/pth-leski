$(document).ready(function() {
	
	hideAll();
	
	updateNavigation();
	
	showOne(aktualneRealizacje);
		
	$("img#nextRealization").click(function(){
			aktualneRealizacje++;
			if (aktualneRealizacje > wyswietlRealizacje) {
				aktualneRealizacje = 1;
			}
			hideAll();			
			updateNavigation();
			showOne(aktualneRealizacje);
		}
	)
	
	$("img#previousRealization").click(function(){
			aktualneRealizacje--;
			if (aktualneRealizacje < 1) {
				aktualneRealizacje = wyswietlRealizacje;
			}
			hideAll();			
			updateNavigation();
			showOne(aktualneRealizacje);
		}
	)
	
});

function updateNavigation(){
	$("span#navigation").empty().append(aktualneRealizacje +'/' +wyswietlRealizacje);
}

function hideAll(){
	$("div.realization").each(function (i) {
			this.style.display = 'none';		
	});
}

function showOne(id){
	$("div.realizationGroup"+id).each(function (i) {
			this.style.display = 'block';		
	});
}