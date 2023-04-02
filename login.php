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

// display login
$app->get('/login', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'login.html.twig');
});

// receiving submission
$app->post('/login', function ($request, $response, $args) use ($log, $passwordPepper) {
    $email = $request->getParam('email');
    $password = $request->getParam('password');
    //
    $record = DB::queryFirstRow("SELECT id, is_admin, first_name, last_name, email, password FROM users WHERE email = %s", $email);
    
    if ($record) {
        $pwdPeppered = hash_hmac('sha256', $password, $passwordPepper);
        $pwdHashed = $record['password'];

        if (password_verify($pwdPeppered, $pwdHashed)) {
            unset($record['password']);
            $_SERVER['user'] = $record;
            $log->debug(sprintf('Login successful for email %s, uid=%d, from %s', $email, $record['id'], $_SERVER['REMOTE_ADDR']));

            return $this->get('view')->render($response, 'login_success.html.twig', ['userSession' => $_SESSION['user']]);
        }

        // Temporary solution to allow for old plain-text passwords to continue to work
        else if ($record['password'] == $password) {
            unset($record['password']);
            $_SERVER['user'] = $record;
            $log->debug(sprintf('Login successful for email %s, uid=%d, from %s', $email, $record['id'], $_SERVER['REMOTE_ADDR']));

            return $this->get('view')->render($response, 'login_success.html.twig', ['userSession' => $_SESSION['user']]);
        }
    }

    $log->info(sprintf('Login failed for email %s from %s', $email, $_SERVER['REMOTE_ADDR']));

    return $this->get('view')->render($response, 'login.html.twig', ['error' => true]);
});

// Sapp-›get ('/logout', function ($request, $response, Sargs) use ($log) {
// $log-›debug(sprintf("Logout successful for wid-%d, from %s", @$_SESSION[ 'user Jl'id'], $_SERVER[ 'REMOTE_ADDR']));
// unset($_SESSION[' user']);
// return $this-›view-›render ($response, 'logout.html.twig', ['usersession' => null J);


/////////// bBLOGDAY03 SAMPLE

// $app->post('/login', function (Request $request, Response $response) use ($link) {
//     $email = $request->getParsedBody()['email'] ?? '';
//     $password = $request->getParsedBody()['password'] ?? '';

//     $result = mysqli_query($link, sprintf("SELECT * FROM users WHERE email='%s'",
//         mysqli_real_escape_string($link, $email)));
    
//     if (!$result) {
//         die("SQL Query failed: " . mysqli_error($link));
//     }
    
//     $userRecord = mysqli_fetch_assoc($result);
//     $loginSuccessful = ($userRecord != null) && ($userRecord['password'] == $password);

//     if (!$loginSuccessful) { // STATE 2: login failed
//         $this->get('view')->render($response, 'login.html.twig', [
//             'errorMessage' => 'Invalid email or password'
//         ]);
//     } else { // login successful
//         unset($userRecord['password']); // for safety reasons remove the password
//         $_SESSION['blogUser'] = $userRecord;
//         $this->get('view')->render($response, 'index.html.twig', [
//             'message' => 'login successful'
//         ]);
//     }
// });
