<div class="leftBox">
	<a href='pl/historia/default' title='Polska wersja'>
		<img src="static/img/flags/pl.gif" alt="Polski" class="lang inline">
	</a>
	<a href='sk/onas/default' title='Slovenčina'>
		<img src="static/img/flags/sk.gif" alt="Slovenčina" class="lang inline">
	</a>	
</div>
<img src="static/img/line.png" alt="" class="menuLine">
<div class="leftBox">
	{ if $zone eq 'pl'}
		Certyfikaty:		
	{ else }
		Certifikáty:
	{ /if}
	<a href="{$zone}/certyfikaty/default">
		<img id="certImg" src="static/img/certyfikaty/{$certImg}" alt="{$certDesc}" class="leftBox">
	</a>	
</div>
<img src="static/img/line.png" alt="" class="menuLine">
<div class="leftBox centerText">
	34-400 Nowy Targ<br>
	ul. Królowej Jadwigi 80A<br>
	tel.: 018 266 92 26<br>
	fax : 018 266 92 26<br>
	NIP: 735-000-40-02<br>
	REGON : 004406638<br>
</div>
<img src="static/img/line.png" alt="" class="menuLine">
<div class="leftBox realizacje">
	{ if $zone eq 'pl'}
		Relizacje:
	{ else }
		Realizácie:
	{ /if}
	{foreach from=$imgMinArray item=img name=img}
		<img src="static/img/realizacje_min/{$img}" id="img{$smarty.foreach.img.iteration}" class="fadeMin" alt="realizacje">
	{/foreach}
</div>
<img src="static/img/menu_bottom.png" alt="" class="menuBottom">