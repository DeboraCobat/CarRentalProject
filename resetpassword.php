<?php

// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;

// require_once 'init.php';


// /// Display password reset page
// $app->get('/resetpassword', function (Request $request, Response $response) {
//     $token = $request->getQueryParams()['token'] ?? '';
    
//     // Check if token exists in database
//     $record = DB::queryFirstRow("SELECT id FROM users WHERE reset_token = %s", $token);
    
//     if ($record) {
//         // Token exists, display reset password form
//         return $this->get('view')->render($response, 'resetpassword.html.twig', ['token' => $token]);
//     }
    
//     // Token does not exist or is invalid, display error message
//     return $this->get('view')->render($response, 'resetpassword_error.html.twig');
// });

// // Process password reset form submission
// $app->post('/resetpassword', function ($request, $response, $args) use ($log) {
//     $token = $request->getParam('token');
//     $password = $request->getParam('password');
    
//     // Check if token exists in database
//     $record = DB::queryFirstRow("SELECT id FROM users WHERE reset_token = %s", $token);
    
//     if ($record) {
//         // Update user's password in database
//         DB::update('users', array(
//             'password' => password_hash($password, PASSWORD_DEFAULT),
//             'reset_token' => null
//         ), "id = %d", $record['id']);
        
//         $log->debug(sprintf('Password reset successful for uid=%d, from %s', $record['id'], $_SERVER['REMOTE_ADDR']));
        
//         // Display success message
//         return $this->get('view')->render($response, 'resetpassword_success.html.twig');
//     }
    
//     // Token does not exist or is invalid, display error message
//     $log->info(sprintf('Password reset failed for token %s from %s', $token, $_SERVER['REMOTE_ADDR']));
//     return $this->get('view')->render($response, 'resetpassword_error.html.twig');
// });
