<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

$app->get('/', 'App\Controllers\HolaController:index');

$app->get('/foo', function (Request $request, Response $response, $args) {
    $myService = $this->get('template');
    //echo var_dump($myService);
    $myService->setFileExtension(null);
    echo $myService->render('components/index.php');
    return $response;
});

$app->get('/hola', 'App\Controllers\HolaController:index');

// login 
$app->get('/login', 'App\Controllers\HolaController:Login');
$app->post('/start/singin', 'App\Controllers\LoginController:validateUser');

// esta es para iniciar el super user
$app->get('/init-system', 'App\Controllers\LoginController:initSystem');
