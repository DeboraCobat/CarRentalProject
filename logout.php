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

// Logout Route


// Unset all session variables
$_SESSION = array();

// Destroy the session
session_unset();
session_destroy();

// Redirect to the home (index) page
header("Location: index.php");
exit;



// <!-- Make sure to include this code at the top of every page that requires the user to be logged in. 
// You can use the PHP session_start() function to start a session and then check if a session variable has been set to validate the user's login status.

// For example, you can add this code to the top of your protected page: -->

// <?php
// session_start();

// // Check if user is logged in
// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: login.php");
//     exit;
// } 
?>

