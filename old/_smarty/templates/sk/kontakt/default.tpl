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
{if $mailInfo neq null}
	<span class="info">{$mailInfo}</span>	
{/if}
{if $mailError neq null}
	<span class="error">{$mailError}</span>
{/if}

<form action="{$zone}/kontakt/default" method="post" name="validate">
	<p><input type="hidden" name="postAction" value="sendMail"></p>
	<p>Pošli nám správu:</p>
	<p><label>Meno a priezvisko:</label><input type="text" size="25" name="imie" class="form" value="{$imie}"></p>
	<p><label>Kontaktná adresa:</label><input type="text" size="45"  name="email" class="form" value="{$email}"></p>
	<p><textarea rows="10" cols="65" name="content" class="formTextArea">{if $content neq null}{$content}{else}Obsah správy{/if}</textarea></p>
	<p><object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=8,0,0,0" width="250" height="70" id="icaptcha">
		<param name="FlashVars" value="ok=Poprawnie&amp;wrong=Zle&amp;c1=1&amp;c2=1&amp;c3=9&amp;c4=1&amp;c5=2&amp;mar=10&amp;gro=3&amp;vel=50&amp;vim=50&amp;leng=php&amp;color=255">
		<param name="movie" value="static/flash/icaptcha.swf">
		<param name="bgcolor" value="#FFFFFF">
		<param name="scale" value="exactfit">
		<embed src="static/flash/icaptcha.swf" FlashVars="ok=Poprawnie&amp;wrong=Źle&amp;c1=1&amp;c2=1&amp;c3=9&amp;c4=1&amp;c5=2&amp;mar=10&amp;gro=3&amp;vel=50&amp;vim=50&amp;leng=php&amp;color=255" scale="exactfit" bgcolor="#FFFFFF" width="250" height="70" name="icaptcha" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer">
	</object></p>
	<p>Odpíš kód z obrázka:<input type="text" name="code" size="7" maxlength="5" value=""></p>
	<p><input type="hidden" name="CAPTCHAkey" value="{$CAPTCHAkey}"></p>	
	<p><input type="submit" name="send" value="Odošli" class="form"></p>
</form>

<br>	
<hr>
<br>	
<div id="map"></div>
<br>

{literal}
<script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=ABQIAAAAycdpTzZqNrV3FRiOgtmZExSMA6Dw6ePY6ZGeWcnsj0JcUe7rWhQ7uFyPgHebUtkmQ046FaP9d3PPmQ" type="text/javascript"></script>   
<script type="text/javascript">   
     var lat=49.479167;  
     var lng=20.022819;  
     var zoom=16;  
 
 	function info(map){
		var info =  "PHT Leski<br><img src=\"static/img/siedziba.jpg\">";   
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
{/literal}


</div>
