<?php
session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;
use Slim\Routing\RouteCollectorProxy;

require_once 'init.php';

$app->get('/register', function ($request, $response, $args) {
    return $this->get('view')->render($response,  'register.html.twig');
});