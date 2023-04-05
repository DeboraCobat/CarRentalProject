<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;
use Slim\Flash\Messages;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use Respect\Validation\Validator as Validator;

require_once __DIR__ . '/vendor/autoload.php';

if ($_SERVER['SERVER_NAME'] == 'carrentalproject.org') {
  // hosted on external server
  DB::$dbName = 'cp5065_gabriel';
  DB::$user = 'cp5065_gabriel';
  DB::$password = '=ozlB,15R5n4';
  DB::$host = 'fsd07.com';
} else {
  DB::$dbName = 'cp5065_gabriel';
  DB::$user = 'cp5065_gabriel';
  DB::$password = '=ozlB,15R5n4';
}
// Create Container
$container = new Container();
AppFactory::setContainer($container);

// Set view in Container
// tmpl cache is where TWIG will store the generated php from the templates. Avoids the overhead of parsing the templates on every request
$container->set('view', function () {
  return Twig::create(__DIR__ . '/templates',  ['cache' => __DIR__ . '/tmplcache', '/cache', 'debug' => true]);
});

// creates a new instance of a Slim Framework application
$app = AppFactory::create();

// Add Twig-View Middleware
$app->add(TwigMiddleware::createFromContainer($app));

$errorMiddleware = $app->addErrorMiddleware(true, true, true);

// Set up logging
$log = new Logger('login');
$log->pushHandler(new StreamHandler(dirname(__FILE__) . '/applogs/everything.log', Logger::DEBUG));
$log->pushHandler(new StreamHandler(dirname(__FILE__) . '/applogs/errors.log', Logger::ERROR));

// All templates will be given userSession variable
$container->set('view', function () use ($container) {
  $view = Twig::create(__DIR__ . '/templates', ['cache' => __DIR__ . '/tmplcache', 'debug' => true]);

  $view->getEnvironment()->addGlobal('userSession', function_exists('session_start') && !empty($_SESSION['user']) ? $_SESSION['user'] : null);
  //$view->getEnvironment()->addGlobal('flashMessage', getAndClearFlashMessage());

  return $view;
});

$userSession = isset($_SESSION['user']) ? $_SESSION['user'] : null;

$passwordPepper = 'mmyb7oSAeXG9DTz2uFqu';


