<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;


require_once __DIR__ . '/vendor/autoload.php';

// if ($_SERVER['SERVER_NAME'] == 'carrental.org') {

  DB::$dbName = 'carrental';
  DB::$user = 'carrental';
  DB::$password = '1lvTox19lz]Itajh';
  DB::$host = 'localhost';
// } else { // hosted on external server
//    DB::$dbName = 'cp5065_gabriel';
//    DB::$user = 'cp5065_gabriel';
//    DB::$password = '=ozlB,15R5n4';
  
// }
// Create Container
$container = new Container();
AppFactory::setContainer($container);

// Set view in Container
// tmpl cache is where TWIG will store the generated php from the templates. Avoids the overhead of parsing the templates on every request
$container->set('view', function () {
    return Twig::create(__DIR__ . '/templates',  ['cache' => __DIR__ . '/tmplcache', 'debug' => true]);
});

// creates a new instance of a Slim Framework application
$app = AppFactory::create();

// Add Twig-View Middleware
$app->add(TwigMiddleware::createFromContainer($app));

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

