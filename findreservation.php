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

// $myreservation = DB::queryFirstRow("SELECT * FROM reservations WHERE reservations.customer_id = 9");

// $myreservation = DB::queryFirstRow("SELECT * FROM reservations WHERE reservations.customer_id = %i", $args['id']);

// $app->post('/findmyreservation', function (Request $request, Response $response) {
//     $data = $request->getParsedBody();

//     // Retrieve the email and reservation ID from the form data
//     $email = $data['email'];
//     $reservationId = $data['reservationId'];

//     // Query the database to find the reservation based on the email and reservation ID provided
//     $reservation = queryReservation($email, $reservationId);

//     // Render the reservation details in a new Twig template
//     $response->getBody()->write(
//         $this->get('view')->render(
//             $response,
//             'reservation_details.html.twig',
//             ['reservation' => $reservation]
//         )
//     );

//     return $response;
// });