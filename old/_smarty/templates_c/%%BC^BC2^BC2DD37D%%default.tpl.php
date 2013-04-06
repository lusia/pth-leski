<?php /* Smarty version 2.6.18, created on 2013-04-06 20:00:41
         compiled from pl/realizacje/default.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'math', 'pl/realizacje/default.tpl', 6, false),)), $this); ?>
<div class="header">Realizacje</div>
<div class="textWyrownany">

	Nasze realizacje:<img src="static/img/leftarrow.png" alt="poprzednie" class="inline" id="previousRealization"><span id="navigation"></span><img src="static/img/rightarrow.png" alt="kolejne realizacje" class="inline" id="nextRealization"><a href="/<?php echo $this->_tpl_vars['zone']; ?>
/<?php echo $this->_tpl_vars['directory']; ?>
/mapa" class="link" title="Geograficzne umiejscowienie realizacji">Mapa</a>
	<?php $_from = $this->_tpl_vars['realizationArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['realizacja'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['realizacja']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['realizacja']):
        $this->_foreach['realizacja']['iteration']++;
?>
		<div class="realization realizationGroup<?php echo smarty_function_math(array('equation' => "(x/y) + 1",'x' => ($this->_foreach['realizacja']['iteration']-1),'y' => $this->_tpl_vars['wyswietl'],'format' => "%d"), $this);?>
">	
			<img src="static/img/li.png" alt="wypunktowanie" class="inline"><span class="bold"><?php echo $this->_tpl_vars['realizacja']->tytul; ?>
</span>
			<div class="textWyrownany"><?php echo $this->_tpl_vars['realizacja']->opis; ?>
</div><br>
		</div>	
	<?php endforeach; endif; unset($_from); ?>

	<div id="real">	
		<?php $_from = $this->_tpl_vars['imgRealArray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['img'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['img']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['img']):
        $this->_foreach['img']['iteration']++;
?>
			<img src="static/img/realizacje/<?php echo $this->_tpl_vars['img']; ?>
" id="imgReal<?php echo $this->_foreach['img']['iteration']; ?>
" class="fadeReal" alt="realizacje">
		<?php endforeach; endif; unset($_from); ?>
	</div>
</div>




<script type="text/javascript" src="static/js/fadeReal.js"></script>
<script type="text/javascript">
	var wyswietlRealizacje = <?php echo smarty_function_math(array('equation' => "(x/y) + 1",'x' => $this->_foreach['realizacja']['total'],'y' => $this->_tpl_vars['wyswietl'],'format' => "%d"), $this);?>
 
	var aktualneRealizacje = 1; 
</script>
<script type="text/javascript" src="static/js/realizacje.js"></script>
