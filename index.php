<?php
session_start ();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;

//SETUP TEH WHOLE SYSTEM
require_once 'init.php';


//BOOKING SYSTEM
require_once '1bookingprocess.php';
require_once 'reservation.php';
require_once 'findreservation.php';


//VEHICLE
require_once 'vehicle.php';


//USER
require_once 'user.php';
require_once 'register.php';
require_once 'login.php';

//PASSWORD
require_once 'forgotpassword.php';
require_once 'resetpassword.php';


$app->run();

