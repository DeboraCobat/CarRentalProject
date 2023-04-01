<?php
//session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;
use Slim\Flash\Messages;



require_once 'init.php';

// Login Route
$app->get('/login', function (Request $request, Response $response) {
    // Display the login form
    return $this->get('view')->render($response, 'login.html.twig');
});

$app->post('/login', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    $email = $data['email'];
    $password = $data['password'];

    // // Check if both email and password are provided
    // if (!$email || !$password) {
    //     $errorList = ['Please enter both email and password'];
    //     return $this->get('view')->render($response, 'login.html.twig', ['errorList' => $errorList]);
    // }

    // Get the user from the database (replace this with your own database query)
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email = %s", $email);

    // Verify if the password matches the hash stored in the database
    // if ($user && password_verify($password, $user['password'])) {
    //     // Set session data to mark the user as logged in
    //     $_SESSION['user'] = [
    //         'id' => $user['id'],
    //         'email' => $user['email'],
    //         'is_admin' => $user['is_admin']
    //     ];

        // Determine which page to forward to
        if ($user['is_admin']) {
            $url = '/admin/adminpanel';
        } else {
            $url = '/customerprofile';
        }

        return $response->withHeader('Location', $url)->withStatus(302);
    // } else {
    //     // Display an error message
    //     $errorList = ['Invalid email or password'];
    //     // Redirect back to the login form
    //     return $this->get('view')->render($response, 'login.html.twig', ['errorList' => $errorList]);
    // }
});




//________________________

// // Login route
// $app->get('/login', function ($request, $response, $args) {
//     return $this->get('view')->render($response, 'login.html.twig');
// });

// // Handle login form submission
// $app->post('/login', function ($request, $response, $args) {
//     $data = $request->getParsedBody();
//     $email = $data['email'];
//     $password = $data['password'];

//     // Retrieve user information from database
//     $user = DB::queryFirstRow("SELECT * FROM users WHERE email = %s", $email);

//     // Determine which page to forward to
//     if ($user && $user['is_admin']) {
//         // Admin user
//         return $response->withHeader('Location', 'admin/adminpanel')->withStatus(302);
//     } else {
//         // Customer
//         return $response->withHeader('Location', '/clientprofile')->withStatus(302);
//     }
// });

