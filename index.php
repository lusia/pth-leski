<?php
function __autoload($className){
	//automatyczne ladowanie klas
	$path = '_class/' .$className .'.class.php';
	require_once($path);
}

ini_set('display_errors','On');
error_reporting(1);

header('Content-type: text/html;charset=UTF-8'); //naglowek przegladarki

$niceUrl = new NiceUri();
$niceUrl->parseUri();
//sprawdzenie gdzie jestesmy

$mySmarty = Bridge::getSmartyInstance();

$controler = new Controler($niceUrl->getZone());

try { //jakby cos jednak polecialo
	//akcja moze wynikac z wybranego adesu
	$controler->createMenuView();
	$controler->setTitle();
	$controler->setPageDescription($niceUrl->getDirectory());

	switch($niceUrl->getDirectory() .'/' .$niceUrl->getFile()){
		case 'kontakt/default' :
			$controler->createKontactView();
			break;
		case 'realizacje/default' :
			$controler->createRealizacjeView();
			break;
		case 'realizacie/default' :
			$controler->createRealizacjeView();
			break;							
		default:
			break;
	}	
}catch (Exception $exception){
	$niceUrl->setDirectory('error');
	$niceUrl->setFile('exception');
	$mySmarty->assign('exception', $exception->getMessage());
}

$mySmarty->assign('zone', $niceUrl->getZone());
$mySmarty->assign('plik', $niceUrl->getPath());
$mySmarty->assign('directory', $niceUrl->getDirectory());
$mySmarty->display('index.tpl');
?>