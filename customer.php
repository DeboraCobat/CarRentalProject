<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;


require_once 'init.php';


//// FINDING RESERVATION

$app->get('/findmyreservation', function (Request $request, Response $response, $args) {
    return $this->get('view')->render($response, 'findmyreservation.html.twig');
});

//     $email = $request->getQueryParam('email');
//     $reservationId = $request->getQueryParam('reservationId');

//     // If the email and reservation ID are not provided, render the template with empty values
//     if (!$email || !$reservationId) {
//         return $this->view->render($response, 'findmyreservation.html.twig', [
//             'email' => '',
//             'reservationId' => ''
//         ]);
//     }

//     // Query the database to retrieve the reservation data for the user and reservation ID
//     // Make sure to sanitize user input to prevent SQL injection attacks
//     $reservation = DB::queryFirstRow('SELECT * FROM reservations WHERE email = %s AND id_reservation = %i', 
//         filter_var($email, FILTER_SANITIZE_EMAIL), 
//         filter_var($reservationId, FILTER_SANITIZE_NUMBER_INT)
//     );

//     // If the reservation was not found, render the template with an error message
//     if (!$reservation) {
//         return $this->view->render($response, 'findmyreservation.html.twig', [
//             'email' => $email,
//             'reservationId' => $reservationId,
//             'error' => 'Reservation not found'
//         ]);
//     }

//     // Render the template with the reservation data
//     return $this->view->render($response, 'findmyreservation.html.twig', [
//         'email' => $email,
//         'reservationId' => $reservationId,
//         'reservation' => $reservation
//     ]);
// });


// // Define a route that accepts a GET request with the user's email and reservation ID as parameters
// $app->get('/findmyreservation/{email}/{reservationId}', function (Request $request, Response $response, $args) {
    
//     // Retrieve the user's email and reservation ID from the route parameters
//     $email = filter_var($args['email'], FILTER_SANITIZE_EMAIL);
//     $reservationId = filter_var($args['reservationId'], FILTER_SANITIZE_NUMBER_INT);

//     // Query the database to retrieve the reservation data for the user and reservation ID
//     $reservation = DB::queryFirstRow('SELECT * FROM reservations WHERE email = %s AND id_reservation = %i', $email, $reservationId);

//     // If the reservation was not found, return a 404 error
//     if (!$reservation) {
//         throw new \Slim\Exception\HttpNotFoundException($request);
//     }

//     // Render the findmyreservation.html.twig template with the reservation data
//     return $this->view->render($response, 'findmyreservation.html.twig', ['reservation' => $reservation]);
// });
