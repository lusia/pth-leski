<div class="header">Realizácie</div>
<div class="textWyrownany">

	Naše realizácie:<img src="static/img/leftarrow.png" alt="poprzednie" class="inline" id="previousRealization"><span id="navigation"></span><img src="static/img/rightarrow.png" alt="kolejne realizacje" class="inline" id="nextRealization"><a href="/{$zone}/{$directory}/mapa" class="link" title="Geografické umiestnenie našich realizácií">Mapa</a>
	{foreach item=realizacja from=$realizationArray name=realizacja}
		<div class="realization realizationGroup{math equation="(x/y) + 1" x=$smarty.foreach.realizacja.index y=$wyswietl format="%d"}">	
			<img src="static/img/li.png" alt="wypunktowanie" class="inline"><span class="bold">{$realizacja->tytul}</span>
			<div class="textWyrownany">{$realizacja->opis}</div><br>
		</div>	
	{/foreach}

	<div id="real">	
		{foreach from=$imgRealArray item=img name=img}
			<img src="static/img/realizacje/{$img}" id="imgReal{$smarty.foreach.img.iteration}" class="fadeReal" alt="realizacje">
		{/foreach}
	</div>
</div>




<script type="text/javascript" src="static/js/fadeReal.js"></script>
<script type="text/javascript">
	var wyswietlRealizacje = {math equation="(x/y) + 1" x=$smarty.foreach.realizacja.total y=$wyswietl format="%d"} 
	var aktualneRealizacje = 1; 
</script>
<script type="text/javascript" src="static/js/realizacje.js"></script>

