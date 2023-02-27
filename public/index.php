<?php 
use Slim\Factory\AppFactory;

date_default_timezone_set('America/Caracas');

require_once __DIR__ .'/../vendor/autoload.php';
require_once __DIR__.'/../config/loader.php';
require_once __DIR__.'/../config/dependencies.php';

$app = AppFactory::create();

// Add Error Handling Middleware
$app->addErrorMiddleware(true, false, false);

require_once __DIR__.'/../app/web.php';

$app->run();