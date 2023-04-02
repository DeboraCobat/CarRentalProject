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

// Display forgot password page
$app->get('/forgotpassword', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'forgotpassword.html.twig');
});

// Process forgot password form submission
$app->post('/forgotpassword', function ($request, $response, $args) use ($log) {
    $email = $request->getParam('email');
    
    // Check if email exists in database
    $record = DB::queryFirstRow("SELECT id FROM users WHERE email = %s", $email);
    
    if ($record) {
        // Generate a new hashed password reset token
        $token = password_hash(bin2hex(random_bytes(32)), PASSWORD_DEFAULT);
        
        // Set expiration time to 1 hour from now
        $expires = time() + (60 * 60);
        
        // Update user's password reset token and expiration time in database
        DB::update('users', array(
            'reset_token' => $token,
            'reset_token_expires' => $expires
        ), "id = %d", $record['id']);

        // Display password reset form with the reset token as a parameter in the URL
        $resetUrl = 'http://example.com/resetpassword?token=' . urlencode($token);
        return $this->get('view')->render($response, 'resetpassword.html.twig', [
            'resetUrl' => $resetUrl
        ]);
    }
    
    // If email does not exist in database, still show success message to prevent phishing attempts
    $log->info(sprintf('Password reset request failed for email %s from %s', $email, $_SERVER['REMOTE_ADDR']));
    return $this->get('view')->render($response, 'forgotpassword_success.html.twig');
});

// Display password reset form
$app->get('/resetpassword', function (Request $request, Response $response) {
    $token = $request->getParam('token');
    
    // Check if token exists in database and is not expired
    $record = DB::queryFirstRow("SELECT id FROM users WHERE reset_token = %s AND reset_token_expires > %d", $token, time());
    
    if ($record) {
        return $this->get('view')->render($response, 'resetpassword.html.twig', [
            'token' => $token
        ]);
    }
    
    // If token does not
