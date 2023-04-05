<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';

$app->get('/resetpassword', function ($request, $response) {
    return $this->get('view')->render($response, 'resetpassword.html.twig');
});

/// RESET PASSWORD
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $email = $_POST['email'];
//     // validate email address and check if it exists in the database

//     $token = bin2hex(random_bytes(32)); // generate a random token
//     // save token and expiration time in the database for the user

//     // send email with password reset link
//     $resetLink = "https://example.com/reset_password.php?token=$token";
//     // use a library like PHPMailer to send the email
// }
// 
