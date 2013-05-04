<?php

require_once __DIR__ . '/../vendor/autoload.php';

//bootstrap and configuration
$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views/',
));
$app->register(new Silex\Provider\UrlGeneratorServiceProvider());

$dispatcher = function ($url = '') use ($app)  {

	$html = '';

	if (1 === preg_match('/[a-z\/]/', $url)) {
		$templatePath = $url .'.html.twig';
		$html = $app['twig']->render($templatePath);
	} elseif ('' === $url) {
		$html = $app['twig']->render('index.html.twig');
	}

	return $html;
};

$app->get('/', $dispatcher);
$app->get('/{url}', $dispatcher)->assert('url', '.+')->bind('page');

$app['twig'] = $app->share($app->extend('twig', function($twig, $app) {

	$function = new Twig_SimpleFunction('ifUrlStartsWithThenReturn', function ($start, $return = '', $else = '') use ($app) {
		$url = strtolower($app['request']->attributes->get('url'));
		$start = strtolower($start);
		$out = $else;

		if (strpos($url, $start) === 0) {
			$out = $return;
		}

		return $out;
	});
	$twig->addFunction($function);
	$twig->addGlobal('baseHostAndUrl', $app['request']->getUriForPath('')); //trick to run without vhost

	return $twig;
}));

$app->error(function(\Exception $e) use ($app) {
	return 'error';
});

return $app;