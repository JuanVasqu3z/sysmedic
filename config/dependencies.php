<?php
use DI\Container;
use Slim\Factory\AppFactory;
use Psr\Container\ContainerInterface;

$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();

$container->set('template', function ($c) {
    return new League\Plates\Engine(__DIR__ . '/../Views');
});

$container = $app->getContainer();

$container->set('App\Controllers\BaseController', function (ContainerInterface $container) {
    // retrieve the 'view' from the container
    $view = $container->get('template');
    
    return new App\Controllers\BaseController($view);
}); 
