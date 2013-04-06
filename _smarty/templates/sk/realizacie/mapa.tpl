<div class="header">Geografické umiestnenie našich realizácií:</div>
<br>
<div id="map"></div>
<br>

{literal}
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAycdpTzZqNrV3FRiOgtmZExSMA6Dw6ePY6ZGeWcnsj0JcUe7rWhQ7uFyPgHebUtkmQ046FaP9d3PPmQ" type="text/javascript"></script>   
<script type="text/javascript">   
     var lat=51.0;  
     var lng=13.4;
     var zoom=5;
 
 	function info(map){
 		var position_lat = new Array();
 		var position_lng = new Array();
 		var city = new Array(); 		 		
 		
		position_lat[position_lat.length] = 49.479167;
		position_lng[position_lng.length] = 20.022819;
		city[city.length] = 'Nowy Targ';

		position_lat[position_lat.length] = 50.073006;
		position_lng[position_lng.length] = 19.944992;
		city[city.length] = 'Kraków';		

		position_lat[position_lat.length] = 49.307665;
		position_lng[position_lng.length] = 19.949799;
		city[city.length] = 'Zakopane';

		position_lat[position_lat.length] = 49.409074;
		position_lng[position_lng.length] = 20.339127;
		city[city.length] = 'Sromowce Wyżne';

		position_lat[position_lat.length] = 52.245461;
		position_lng[position_lng.length] = 21.012726;
		city[city.length] = 'Warszawa';			

		position_lat[position_lat.length] = 51.116024;
		position_lng[position_lng.length] = 17.038422;
		city[city.length] = 'Wrocław';

		position_lat[position_lat.length] = 49.707386;
		position_lng[position_lng.length] = 20.422211;
		city[city.length] = 'Limanowa';
		
		position_lat[position_lat.length] = 49.427277;
		position_lng[position_lng.length] = 20.482979;
		city[city.length] = 'Szczawnica';

		position_lat[position_lat.length] = 49.41075;
		position_lng[position_lng.length] = 20.302906;
		city[city.length] = 'Niedzica';

		position_lat[position_lat.length] = 49.435092;
		position_lng[position_lng.length] = 20.02533; 
		city[city.length] = 'Szaflary';

		position_lat[position_lat.length] = 52.3657337;
		position_lng[position_lng.length] = 4.8640614;
		city[city.length] = 'Amsterdam';

		position_lat[position_lat.length] = 50.9221;
		position_lng[position_lng.length] = 14.8892;
		city[city.length] = 'Bogatynia';

		position_lat[position_lat.length] = 50.0409;
		position_lng[position_lng.length] = 21.9993;
		city[city.length] = 'Rzeszów';

		position_lat[position_lat.length] = 49.6175;
		position_lng[position_lng.length] = 20.7153;
		city[city.length] = 'Nowy Sącz';

		position_lat[position_lat.length] = 49.8224;
		position_lng[position_lng.length] = 19.0584;
		city[city.length] = 'Bielsko Biała';

		position_lat[position_lat.length] = 50.9044;
		position_lng[position_lng.length] = 15.7194;
		city[city.length] = 'Jelenia Góra';

		position_lat[position_lat.length] = 53.9294452;
		position_lng[position_lng.length] = 14.4521473;
		city[city.length] = 'Międzyzdroje';

		position_lat[position_lat.length] = 48.736277;
		position_lng[position_lng.length] = 19.1461917;
		city[city.length] = 'Banska Bystrzyca';

		position_lat[position_lat.length] = 50.9072496;
		position_lng[position_lng.length] = 14.9561498;
		city[city.length] = 'Bogatynia';

		position_lat[position_lat.length] = 49.8223768;
		position_lng[position_lng.length] = 19.0583845;
		city[city.length] = 'Bielsko Biała';

		position_lat[position_lat.length] = 51.2070067;
		position_lng[position_lng.length] = 16.1553231;
		city[city.length] = 'Legnica';

		position_lat[position_lat.length] = 51.6635852;
		position_lng[position_lng.length] = 16.0846672;
		city[city.length] = 'Głogów';

		position_lat[position_lat.length] = 52.7325285;
		position_lng[position_lng.length] = 15.2369305;
		city[city.length] = 'Gorzów Wielkopolski';

		position_lat[position_lat.length] = 54.3420055;
		position_lng[position_lng.length] = 18.3650381;
		city[city.length] = 'Żukowo';

		position_lat[position_lat.length] = 51.9356214;
		position_lng[position_lng.length] = 15.5061862;
		city[city.length] = 'Zielona Góra';

		position_lat[position_lat.length] = 52.0550373;
		position_lng[position_lng.length] = 15.0972099;
		city[city.length] = 'Krosno Odrzańskie';

		position_lat[position_lat.length] = 52.406374;
		position_lng[position_lng.length] = 16.9251681;
		city[city.length] = 'Poznań';

		position_lat[position_lat.length] = 51.7672799;
		position_lng[position_lng.length] = 18.0853462;
		city[city.length] = 'Kalisz';

		position_lat[position_lat.length] = 53.4061597;
		position_lng[position_lng.length] = 23.5030235;
		city[city.length] = 'Sokółka';

		position_lat[position_lat.length] = 49.421973218655545;
		position_lng[position_lng.length] = 20.959854125976562;
		city[city.length] = 'Krynica';

		position_lat[position_lat.length] = 49.99598806786974;
		position_lng[position_lng.length] = 19.43756103515625;
		city[city.length] = 'Zator';

		position_lat[position_lat.length] = 49.9751815;
		position_lng[position_lng.length] = 19.8288749;
		city[city.length] = 'Skawina';		

		position_lat[position_lat.length] = 49.67403;
		position_lng[position_lng.length] = 20.07982;
		city[city.length] = 'Mszana Dolna';

		position_lat[position_lat.length] = 52.5738181;
		position_lng[position_lng.length] = 17.008658;
		city[city.length] = 'Murowana Goślina';

		position_lat[position_lat.length] = 53.16928;
		position_lng[position_lng.length] = 15.41971;
		city[city.length] = 'Choszczno';

		position_lat[position_lat.length] = 54.322684;
		position_lng[position_lng.length] = 10.13586;
		city[city.length] = 'Kiel';

		position_lat[position_lat.length] = 37.983474;
		position_lng[position_lng.length] = -1.1298867;
		city[city.length] = 'Murcia';		
		
		var i=0;
		for (i=0; i<position_lat.length; i++){
			var point = new GLatLng(position_lat[i], position_lng[i]);   
	       	map.addOverlay(createMarker(point, city[i]));	       			
		}
 	}

	function createMarker(point, city) {
          var marker = new GMarker(point);
		  GEvent.addListener(marker, "mouseover", function() {
          		marker.openInfoWindowHtml(city);
	      });
          return marker;
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
{/literal}