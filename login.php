<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';


// Display login
$app->get('/login', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'login.html.twig');
});

// Receive submission

$app->post('/login', function (Request $request, Response $response, $args) use ($log) {
    $data = $request->getParsedBody();
    $email = isset($data['email']) ? $data['email'] : '';
    $password = isset($data['password']) ? $data['password'] : '';


    // Check if user exists
    $record = DB::queryFirstRow("SELECT * FROM users WHERE email = %s", $email);
    $loginSuccess = false;

    if ($record) {
        global $passwordPepper;
        $pwdPeppered = hash_hmac("sha256", $password, $passwordPepper);
        $pwdHashed = $record['password'];
        if (password_verify($pwdPeppered, $pwdHashed)) {
            $loginSuccess = true;
        }
        // WARNING: only temporary solution to allow for old plain-text passwords to continue to work
        // Plain text passwords comparison
        else if ($record['password'] == $password) {
            $loginSuccess = true;
        }
    }

    // Check if password is correct
    if ($loginSuccess) {
        unset($record['password']); 
        $_SESSION['user'] = $record; 
        $log->debug(sprintf("Login successful for email %s, uid=%d, from %s", $email, $record['id'], $_SERVER['REMOTE_ADDR']));

  
        if ($record['is_admin']) {
            return $response->withHeader('Location', 'admin/adminpanel')->withStatus(302);
        } else {
            return $response->withHeader('Location', '/customerprofile')->withStatus(302);
        }
    } else {
        $log->info(sprintf('Login failed for email %s from %s', $email, $_SERVER['REMOTE_ADDR']));
        return $this->get('view')->render($response, 'login_error.html.twig', ['error' => true]);
    }

    // error message
    return $this->get('view')->render($response, 'login_error.html.twig', ['error' => true]);
});

// Check if user is logged in
function checkAuth()
{
    session_start();
    if (!isset($_SESSION['user'])) {
        header('Location: /not_authorized');
        exit;
    }
}

// Display home page
$app->get('/home', function (Request $request, Response $response) use ($app) {
    checkAuth();
    $isLoggedIn = isset($_SESSION['user']);
    return $this->get('view')->render($response, 'index.html.twig', [
        'auth' => [
            'isLoggedIn' => $isLoggedIn
        ]
    ]);
});

//LOGOUT
$app->get('/logout', function (Request $request, Response $response, $args) use ($log) {
    session_start();
    if (isset($_SESSION['user'])) {
        $log->debug(sprintf(
            "Logout successful for uid=%d, from %s",
            $_SESSION['user']['id'],
            $_SERVER['REMOTE_ADDR']
        ));

        unset($_SESSION['user']);
    }

    return $this->get('view')->render($response, 'logout.html.twig', [
        'usersession' => null
    ]);
});


//LOGOUT ADMIN
$app->get('/admin/logout', function (Request $request, Response $response, $args) use ($log) {
    session_start();
    if (isset($_SESSION['user'])) {
        $log->debug(sprintf(
            "Logout successful for uid=%d, from %s",
            $_SESSION['user']['id'],
            $_SERVER['REMOTE_ADDR']
        ));

        unset($_SESSION['user']);
    }

    return $this->get('view')->render($response, 'admin/logout.html.twig', [
        'usersession' => null
    ]);
});
