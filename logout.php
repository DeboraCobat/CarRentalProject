<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;

require_once 'init.php';

$app->get('/logout', function (Request $request, Response $response) {
  return $this->get('view')->render($response, 'logout.html.twig');
});

// // session_reset();
//         unset($_SESSION['blogUser']);