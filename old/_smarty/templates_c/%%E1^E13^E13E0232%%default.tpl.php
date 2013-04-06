<?php /* Smarty version 2.6.18, created on 2013-04-06 19:23:40
         compiled from pl/kontakt/default.tpl */ ?>
<div class="header">Kontakt</div>
<div class="textWyrownany">

<br>
PTH "Leski" Remigiusz Leski<br>
ul.Królowej Jadwigi 80A<br>
34-400 Nowy Targ, tel./fax 0-18 266 92 26<br>
NIP 735-000-40-02<br>
REGON 004406638<br>
<a href="http://www.leski.com.pl" class="link">http://www.leski.com.pl</a><br>
<hr>

<br>	
<div id="map"></div>
<br>

<?php echo '
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAycdpTzZqNrV3FRiOgtmZExSMA6Dw6ePY6ZGeWcnsj0JcUe7rWhQ7uFyPgHebUtkmQ046FaP9d3PPmQ" type="text/javascript"></script>   
<script type="text/javascript">   
     var lat=49.479167;  
     var lng=20.022819;  
     var zoom=16;  
 
 	function info(map){
		var info =  "PHT Leski<br><img src=\\"static/img/siedziba.jpg\\">";   
		var point = new GLatLng(lat, lng);   
		var marker = new GMarker(point);   
		map.addOverlay(marker);   
		marker.openInfoWindowHtml(info);    	
 	}
 
     function load() {  
       if (GBrowserIsCompatible()) {  
        var map = new GMap2(document.getElementById("map"));  
  
     	map.setCenter(new GLatLng(lat, lng), zoom);   
	    map.addControl(new GLargeMapControl ());     
     
	    map.addControl(new GScaleControl());     
    	map.addControl(new GMapTypeControl());     
     	map.setCenter(new GLatLng(lat, lng), zoom);   
  
     	map.hideControls();   
     	GEvent.addListener(map, "mouseover", function(){map.showControls();});   
     	GEvent.addListener(map, "mouseout", function(){map.hideControls();});
     	info(map);            
       }  
     }  
 	 
 	 load()
</script>   
'; ?>



</div>