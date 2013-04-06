<?php /* Smarty version 2.6.18, created on 2013-04-06 19:57:12
         compiled from menu.tpl */ ?>
<script src="static/js/menu.js" type="text/javascript"></script>

	<?php $_from = $this->_tpl_vars['menuArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
		<?php if ($this->_tpl_vars['directory'] == $this->_tpl_vars['menu']['link']): ?>
			<div class="menu active" onclick="changePage('http://www.leski.com.pl/<?php echo $this->_tpl_vars['zone']; ?>
/<?php echo $this->_tpl_vars['menu']['link']; ?>
/default')" onmouseover="changeMenuPicture(this, 'menu_on')" onmouseout="changeMenuPicture(this, 'menu_active')"><a href="<?php echo $this->_tpl_vars['zone']; ?>
/<?php echo $this->_tpl_vars['menu']['link']; ?>
/default" title="<?php echo $this->_tpl_vars['menu']['pageHTMLdescription']; ?>
"><?php echo $this->_tpl_vars['menu']['description']; ?>
</a></div>
		<?php else: ?>
			<div class="menu off" onclick="changePage('http://www.leski.com.pl/<?php echo $this->_tpl_vars['zone']; ?>
/<?php echo $this->_tpl_vars['menu']['link']; ?>
/default')" onmouseover="changeMenuPicture(this, 'menu_on')" onmouseout="changeMenuPicture(this, 'menu_off')"><a href="<?php echo $this->_tpl_vars['zone']; ?>
/<?php echo $this->_tpl_vars['menu']['link']; ?>
/default" title="<?php echo $this->_tpl_vars['menu']['pageHTMLdescription']; ?>
"><?php echo $this->_tpl_vars['menu']['description']; ?>
</a></div>
		<?php endif; ?>
	<?php endforeach; endif; unset($_from); ?>