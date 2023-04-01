<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;


require_once 'init.php';


////////////////// CLIENT URL ///////////////////

$app->get('/customerprofile', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'customerprofile.html.twig');
});



//// FINDING RESERVATION

// Define a route that accepts a GET request with the user's email and reservation ID as parameters
// $app->get('/findmyreservation/{email}/{reservationId}', function (Request $request, Response $response, $args) {

//     // Retrieve the user's email and reservation ID from the route parameters
//     $email = $args['email'];
//     $reservationId = $args['reservationId'];

//     // Query the database to retrieve the reservation data for the user and reservation ID
//     $stmt = $this->db->prepare('SELECT * FROM reservations WHERE email = :email AND id_reservation = :reservationId AND id_vehicle = id_user');
//     $stmt->bindParam(':email', $email);
//     $stmt->bindParam(':reservationId', $reservationId);
//     $stmt->execute();
//     $reservation = $stmt->fetch();

//     // Render the findmyreservation.html.twig template with the reservation data
//     return $this->view->render($response, 'findmyreservation.html.twig', ['reservation' => $reservation]);
// });


