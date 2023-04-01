<?php
// session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;


require_once 'init.php';


// Login route
$app->get('/login', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'login.html.twig');
});

// Handle login form submission
$app->post('/login', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    $email = $data['email'];
    $password = $data['password'];

    // Retrieve user information from database
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email = %s", $email);

    // Determine which page to forward to
    if ($user && $user['is_admin']) {
        // Admin user
        return $response->withHeader('Location', 'admin/adminpanel')->withStatus(302);
    } else {
        // Customer
        return $response->withHeader('Location', '/clientprofile')->withStatus(302);
    }
});

//////////// LOG OUT ////////

//Logout route
$app->get('/logout', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'logout.html.twig');
});

