<?php /* Smarty version 2.6.18, created on 2013-04-06 19:57:12
         compiled from leftBox.tpl */ ?>
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
	<?php if ($this->_tpl_vars['zone'] == 'pl'): ?>
		Certyfikaty:		
	<?php else: ?>
		Certifikáty:
	<?php endif; ?>
	<a href="<?php echo $this->_tpl_vars['zone']; ?>
/certyfikaty/default">
		<img id="certImg" src="static/img/certyfikaty/<?php echo $this->_tpl_vars['certImg']; ?>
" alt="<?php echo $this->_tpl_vars['certDesc']; ?>
" class="leftBox">
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
	<?php if ($this->_tpl_vars['zone'] == 'pl'): ?>
		Relizacje:
	<?php else: ?>
		Realizácie:
	<?php endif; ?>
	<?php $_from = $this->_tpl_vars['imgMinArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['img'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['img']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['img']):
        $this->_foreach['img']['iteration']++;
?>
		<img src="static/img/realizacje_min/<?php echo $this->_tpl_vars['img']; ?>
" id="img<?php echo $this->_foreach['img']['iteration']; ?>
" class="fadeMin" alt="realizacje">
	<?php endforeach; endif; unset($_from); ?>
</div>
<img src="static/img/menu_bottom.png" alt="" class="menuBottom">