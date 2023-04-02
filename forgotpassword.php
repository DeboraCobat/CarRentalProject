<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';

// Display forgot password page
$app->get('/forgotpassword', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'forgotpassword.html.twig');
});

// Handle forgot password form submission
$app->post('/forgotpassword', function (Request $request, Response $response) {
    $email = $request->getParsedBody()['email'] ?? '';
    // Check if email exists in your database
    $record = DB::queryFirstRow("SELECT id, first_name, last_name FROM users WHERE email = %s", $email);
    if ($record) {
        $token = bin2hex(random_bytes(16)); // Generate a unique token
        // Update token in database
        DB::update('users', [
            'reset_token' => $token
        ], "id=%d", $record['id']);

        // Send email with token to user
        $name = $record['first_name'];
        $to = $email;
        $subject = 'Password Reset Request';
        $message = "Hi $name,\n\nWe received a request to reset your password. Please use the following link to reset your password:\n\n";
        $reset_link = $request->getUri()->getScheme() . '://' . $request->getUri()->getHost() . '/resetpassword?token=' . $token;
        $message .= $reset_link;
        $headers = 'From: noreply@example.com' . "\r\n" .
            'Reply-To: noreply@example.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        mail($to, $subject, $message, $headers);

        // Display message to user
        $message = "An email has been sent to $email with instructions to reset your password.";
        return $this->get('view')->render($response, 'forgotpassword_success.html.twig', ['message' => $message]);
    } else {
        // Email does not exist in database
        $message = "Sorry, we couldn't find that email address in our records.";
        return $this->get('view')->render($response, 'forgotpassword.html.twig', ['message' => $message]); //adderror
    }
});

// Display password reset page
$app->get('/resetpassword', function (Request $request, Response $response, $args) {
    $token = $request->getQueryParams()['token'] ?? '';
    return $this->get('view')->render($response, 'resetpassword.html.twig', ['token' => $token]);
});

// Handle reset password form submission
$app->post('/resetpassword', function (Request $request, Response $response) {
    $token = $request->getParsedBody()['token'] ?? '';
    $password = $request->getParsedBody()['password'] ?? '';
    $confirm_password = $request->getParsedBody()['confirm_password'] ?? '';

    // Check if token exists in your database
    $record = DB::queryFirstRow("SELECT email FROM users WHERE reset_token = %s", $token);
    if ($record) {
        // Update password in database
        DB::update('users', [
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'reset_token' => NULL
        ], "reset_token=%s", $token);
        // Password reset successful
        $message = "Your password has been reset successfully.";
        return $this->get('view')->render($response, 'login.html.twig', ['message' => $message]);
    } else {
        // Token does not exist in database
        $message = "Sorry, we couldn't find that password reset token in our records.";
        return $this->get('view')->render($response, 'resetpassword.html.twig', ['message' => $message]);
    }
});

// // Display forgot password page
// $app->get('/forgotpassword', function (Request $request, Response $response) {
//     return $this->get('view')->render($response, 'forgotpassword.html.twig');
// });

// // Display forgot password page
// $app->get('/forgotpassword', function (Request $request, Response $response) {
//     return $this->get('view')->render($response, 'forgotpassword.html.twig');
// });

// // Handle forgot password form submission
// $app->post('/forgotpassword', function (Request $request, Response $response) {
//     $email = $request->getParsedBody()['email'] ?? '';
//     // Check if email exists in your database
//     $record = DB::queryFirstRow("SELECT id FROM users WHERE email = %s", $email);
//     if ($record) {
//         $token = bin2hex(random_bytes(16)); // Generate a unique token
//         // Display token to user
//         $message = "Your password reset token is: $token. Please copy this token and enter it on the next page to reset your password.";
//         return $this->get('view')->render($response, 'resetpassword.html.twig', ['message' => $message]);
//     } else {
//         // Email does not exist in database
//         $message = "Sorry, we couldn't find that email address in our records.";
//         return $this->get('view')->render($response, 'forgotpassword.html.twig', ['message' => $message]);
//     }
// });

// // Display password reset page
// $app->get('/resetpassword', function (Request $request, Response $response, $args) {
//     $token = $request->getQueryParams()['token'] ?? '';
//     return $this->get('view')->render($response, 'resetpassword.html.twig', ['token' => $token]);
// });

// // Handle reset password form submission
// $app->post('/resetpassword', function (Request $request, Response $response) {
//     $token = $request->getParsedBody()['token'] ?? '';
//     $password = $request->getParsedBody()['password'] ?? '';
//     $confirm_password = $request->getParsedBody()['confirm_password'] ?? '';

//     // Check if token exists in your database
//     $record = DB::queryFirstRow("SELECT email FROM users WHERE reset_token = %s", $token);
//     if ($record) {
//         // Update password in database
//         DB::update('users', [
//             'password' => password_hash($password, PASSWORD_DEFAULT),
//             'reset_token' => NULL
//         ], "reset_token=%s", $token);
//         // Password reset successful
//         $message = "Your password has been reset successfully.";
//         return $this->get('view')->render($response, 'login.html.twig', ['message' => $message]);
//     } else {
//         // Token does not exist in database
//         $message = "Sorry, we couldn't find that password reset token in our records.";
//         return $this->get('view')->render($response, 'resetpassword.html.twig', ['message' => $message]);
//     }
// });
