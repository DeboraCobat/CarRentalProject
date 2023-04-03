<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';

// Display login
$app->get('/customerprofile', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'customerprofile.html.twig');
});
