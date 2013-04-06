<script src="static/js/menu.js" type="text/javascript"></script>

	{foreach from=$menuArray item=menu}
		{if $directory eq $menu.link}
			<div class="menu active" onclick="changePage('http://www.leski.com.pl/{$zone}/{$menu.link}/default')" onmouseover="changeMenuPicture(this, 'menu_on')" onmouseout="changeMenuPicture(this, 'menu_active')"><a href="{$zone}/{$menu.link}/default" title="{$menu.pageHTMLdescription}">{$menu.description}</a></div>
		{else}
			<div class="menu off" onclick="changePage('http://www.leski.com.pl/{$zone}/{$menu.link}/default')" onmouseover="changeMenuPicture(this, 'menu_on')" onmouseout="changeMenuPicture(this, 'menu_off')"><a href="{$zone}/{$menu.link}/default" title="{$menu.pageHTMLdescription}">{$menu.description}</a></div>
		{/if}
	{/foreach}