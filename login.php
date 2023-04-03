<?php
session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;

require_once 'init.php';


$app->get('/login', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'login.html.twig');
});

$app->get('/customerprofile', function (Request $request, Response $response) {
    //return $this->get('view')->render($response, 'customerprofile.html.twig');
    // Check if user is logged in
    // if (!isset($_SESSION['email'])) {
    //     // User is not logged in, redirect to login page
    //     return $response->withHeader('Location', '/login')->withStatus(302);
    // }

    // // User is logged in, display customer profile page
    // return $this->get('view')->render($response, 'customerprofile.html.twig');
    
//     $successMessage = '';
//     $errorList = [];
//     return $this->get('view')->render($response, 'customerprofile.html.twig', [
//       'successMessage' => $successMessage,
//       'errorList' => $errorList
//   ]);
});

$app->post('/login', function ($request, $response, $args) {
    $data = $request->getParsedBody();
    $email = $data['email'];
    $password = $data['password'];

    // // Validate user input
    // $errorList = array();
    // if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //     $errorList[] = 'Invalid email';
    // }

    // if (empty($password)) {
    //     $errorList[] = 'Password is required';
    // }

    // // Check if there are any errors
    // if (count($errorList) > 0) {
    //     return $this->get('view')->render($response, 'login.html.twig', ['errors' => $errorList]);
    // }

    // // Check if email exists
    $user = DB::queryFirstRow("SELECT * FROM users WHERE email = %s", $email);
    // if (!$user) {
    //     $errorList[] = 'Invalid email or password';
    //     return $this->get('view')->render($response, 'login.html.twig', ['errors' => $errorList]);
    // }

    // // Verify password
    if (!password_verify($password, $user['password'])) {
        $errorList[] = 'Invalid email or password';
        return $this->get('view')->render($response, 'login.html.twig', ['errors' => $errorList]);
    }

    // Store user session data
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['is_admin'] = $user['is_admin'];

    // Determine which page to forward to
    if ($user['is_admin']) {
        // Admin user
        return $response->withHeader('Location', 'admin/adminpanel')->withStatus(302);
    } else {
        // Customer
        return $response->withHeader('Location', '/customerprofile')->withStatus(302);
    }
});



// // Display the login form
// $app->get('/login', function (Request $request, Response $response) {
//     return $this->get('view')->render($response, 'login.html.twig');
// });

// $app->get('/customerprofile', function (Request $request, Response $response) {
//     return $this->get('view')->render($response, 'customerprofile.html.twig');
// });


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
//         return $response->withHeader('Location', '/customerprofile')->withStatus(302);
//     }
// });