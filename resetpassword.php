<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';

$app->get('/resetpassword', function ($request, $response) {
    return $this->get('view')->render($response, 'resetpassword.html.twig');
});
