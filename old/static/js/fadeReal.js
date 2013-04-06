
 var opacityReal = 1;
 var stepReal = 0.02;
 var timeReal = 120;
 var indexReal = 0;	
 var idIntervalReal;	
 var imgCountReal; 

 function animationReal(){

	if (indexReal+1 > imgCountReal){
		img1NumberReal = indexReal;
		img2NumberReal = 1;
	}else{
		img1NumberReal = indexReal;
		img2NumberReal = img1NumberReal + 1;
	}
	
	$("#imgReal" +img1NumberReal).css("opacity", opacityReal);	
	$("#imgReal" +img2NumberReal).css("opacity", 1-opacityReal);	
	opacityReal = opacityReal - stepReal;

	if (opacityReal < 0){
		clearInterval(idIntervalReal);
		setTimeout("againReal()", 3000);
	}
	
 }

 function againReal(){
	opacityReal = 1;
	indexReal++;
	if (indexReal > imgCountReal){
		indexReal = 1;
	}
	idIntervalReal = setInterval("animationReal()", timeReal);
 }

 $(document).ready(function() {
	$("div#real").find("img").each(function(i) {
      imgCountReal = i;
   	});	
   	imgCountReal++;
	idIntervalReal = setInterval("animationReal()", timeReal);   	
  });