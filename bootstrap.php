<?php

require __DIR__ . '/vendor/autoload.php';

$app = new \Slim\App([
    'settings' => [
        'displayErrorDetails' => true
    ]
]);

$container = $app->getContainer();
$container['view'] = function ($container) {
	$view = new \Slim\Views\Twig('../templates', [
		'cache' => false
	]);
	$router = $container->get('router');
	$uri = \Slim\Http\Uri::createFromEnvironment(new \Slim\Http\Environment($_SERVER));
	$view->addExtension(new Slim\Views\TwigExtension($router, $uri));

	return $view;
};
/*
$container['IndexController'] = function($c) {
    $view = $c->get("midias/midia.html.twig");
    return new IndexController($view);
};*/

/*
$app->get('/', function ($request, $response, $args) {
    return $this->view->render($response, 'midias/midia.html.twig');
});*/

$app->get('/', \App\Controllers\IndexController::class . ':getAllMidias');
$app->get('/all', \App\Controllers\IndexController::class . ':getAllMidias');
$app->get('/{sitename}', \App\Controllers\IndexController::class . ':getAllMidias');

$app->run();