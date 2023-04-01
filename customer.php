<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;


require_once 'init.php';


////////////////// CLIENT URL ///////////////////

$app->get('/clientprofile', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'clientprofile.html.twig');
});

