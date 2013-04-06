<?php
class Bridge {

	private static $smartyInstance = null;

	public static function getSmartyInstance ( )
	{
		if (is_null(self::$smartyInstance))
		{
			require_once('_class/smarty/Smarty.class.php'); //zaladowanie clasy smarty

			self::$smartyInstance = new Smarty();
			self::$smartyInstance->template_dir = '_smarty/templates';
			self::$smartyInstance->compile_dir = '_smarty/templates_c';
			self::$smartyInstance->cache_dir = '_smarty/cache';
			self::$smartyInstance->config_dir = '_smarty/configs';
			self::$smartyInstance->caching = 0;
					
		}
		return self::$smartyInstance;
	}

	
}
