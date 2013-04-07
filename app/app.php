<?php

require_once __DIR__ . '/../vendor/autoload.php';

//bootstrap and configuration
$app = new Silex\Application();
$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

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
$app->get('/{url}', $dispatcher)->assert('url', '.+');

$app->error(function(\Exception $e) use ($app) {
	return 'error';
});

return $app;