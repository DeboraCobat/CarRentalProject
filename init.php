<?php
session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;
use Slim\Flash\Messages;
use Respect\Validation\Validator as Validator;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


require_once __DIR__ . '/vendor/autoload.php';

// create a log channel
$log = new Logger ('main');
$log->pushHandler (new StreamHandler(__DIR__ . '/applogs/everything.log', Logger::DEBUG));
$log->pushHandler (new StreamHandler(__DIR__ . '/applogs/errors.log', Logger::ERROR));

if ($_SERVER['SERVER_NAME'] == 'carrentalproject.org') {

// // DB::$dbName = 'carrental';
// // DB::$user = 'carrental';
// // DB::$password = '1lvTox19lz]Itajh';
// // DB::$host = 'localhost';

DB::$dbName = 'cp5065_gabriel';
DB::$user = 'cp5065_debora';
DB::$password = '=ozlB,15R5n4';
DB::$host = 'fsd07.com';

} else { //hosted on external server

DB::$dbName = 'cp5065_gabriel';
DB::$dbName = 'cp5065_gabriel';
DB::$password = '=ozlB,15R5n4';
DB::$host = 'fsd07.com';
  
}

// Create Container
$container = new Container();
AppFactory::setContainer($container);

// Set view in Container
// tmpl cache is where TWIG will store the generated php from the templates. Avoids the overhead of parsing the templates on every request
$container->set('view', function () {
    return Twig::create(__DIR__ . '/templates',  ['cache' => __DIR__ . '/tmplcache','/cache', 'debug' => true]);
});

// $container->set(\Slim\Flash\Messages::class, function () {
//     return new \Slim\Flash\Messages();
// });


// creates a new instance of a Slim Framework application
$app = AppFactory::create();
//$app = AppFactory::createFromContainer($container);

// Add Twig-View Middleware
$app->add(TwigMiddleware::createFromContainer($app));

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

