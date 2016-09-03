<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// twig view
$container['view'] = function ($container) {
	$view = new \Slim\Views\Twig( __DIR__ . '/../templates', [
		'cache' => __DIR__ . '/../templates/_cache',
		'auto_reload' => true,
		'debug' => false
	]);

	$view->addExtension(new \Slim\Views\TwigExtension($container['router'], $container['request']->getUri()));
	$view->offsetSet('baseUrl', $container['request']->getUri()->getBaseUrl());
	return $view;
};