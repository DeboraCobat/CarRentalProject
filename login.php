<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Routing\RouteCollectorProxy;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;
use Respect\Validation\Validator as Validator;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

require_once 'init.php';

// Display login
$app->get('/login', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'login.html.twig');
});
    
// receiving submission
$app->post('/login', function (Request $request, Response $response, $args) use ($log, $passwordPepper) {
    $data = $request->getParsedBody();
    $email = $data['email'] ?? '';
    $password = $data['password'] ?? '';
    
    // Check if user exists
    $record = DB::queryFirstRow("SELECT id, is_admin, first_name, last_name, email, password FROM users WHERE email = %s", $email);

    if ($record) {
        $pwdPeppered = hash_hmac('sha256', $password, $passwordPepper);
        $pwdHashed = $record['password'];

        // Check if password is correct
        if ($pwdPeppered === $pwdHashed) {
            $_SESSION['user'] = $record;
            $log->debug(sprintf('Login successful for email %s, uid=%d, from %s', $email, $record['id'], $_SERVER['REMOTE_ADDR']));

            $_SESSION['auth']['isLoggedIn'] = true;

            return $this->get('view')->render($response, 'login_success.html.twig', ['userSession' => $_SESSION['user']]);
        }
    }

    $log->info(sprintf('Login failed for email %s from %s', $email, $_SERVER['REMOTE_ADDR']));

    // Show error message
    return $this->get('view')->render($response, 'login.html.twig', ['error' => true]);
});

// Check if user is logged in
function checkAuth() {
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: login.php');
        exit;
    }
}

// Display home page
$app->get('/home', function (Request $request, Response $response) use ($auth) {
    checkAuth();
    $isLoggedIn = isset($_SESSION['user']);
    return $this->get('view')->render($response, 'index.html.twig', [
        'auth' => [
            'isLoggedIn' => $isLoggedIn
        ]
    ]);
});

// Redirect logged in user to appropriate page
$app->get('/', function (Request $request, Response $response) {
    session_start();
    $user = @$_SESSION['user'];

    if (!$user) {
        // User not logged in
        return $response->withHeader('Location', '/login')->withStatus(302);
    } else {
        if ($user['is_admin']) {
            // Admin user
            return $response->withHeader('Location', 'admin/adminpanel')->withStatus(302);
        } else {
            // Customer
            return $response->withHeader('Location', '/customerprofile')->withStatus(302);
        }
    }
});

//LOGOUT
$app->get('/logout', function ($request, $response, $args) use ($log) {
    $log->debug(sprintf(
        "Logout successful for uid=%d, from %s",
        @$_SESSION['user']['id'],
        $_SERVER['REMOTE_ADDR']
    ));

    unset($_SESSION['user']);

    return $this->get('view')->render($response, 'logout.html.twig', [
        'usersession' => null
    ]);
});
