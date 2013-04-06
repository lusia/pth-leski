
 var opacityMin = 1;
 var stepMin = 0.02;
 var timeMin = 120;
 var indexMin = 0;	
 var idIntervalMin;	
 var imgCountMin; 

 function animationMin(){

	if (indexMin+1 > imgCountMin){
		img1NumberMin = indexMin;
		img2NumberMin = 1;
	}else{
		img1NumberMin = indexMin;
		img2NumberMin = img1NumberMin + 1;
	}
	
	$("#img" +img1NumberMin).css("opacity", opacityMin);	
	$("#img" +img2NumberMin).css("opacity", 1-opacityMin);	
	opacityMin = opacityMin - stepMin;

	if (opacityMin < 0){
		clearInterval(idIntervalMin);
		setTimeout("againMin()", 1000);
	}
	
 }

 function againMin(){
	opacityMin = 1;
	indexMin++;
	if (indexMin > imgCountMin){
		indexMin = 1;
	}
	idIntervalMin = setInterval("animationMin()", timeMin);
 }

 $(document).ready(function() {
	$("div.realizacje").find("img").each(function(i) {
      imgCountMin = i;
   	});	
   	imgCountMin++;
	idIntervalMin = setInterval("animationMin()", timeMin);   	
  });