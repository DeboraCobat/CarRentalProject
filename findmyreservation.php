<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;

require_once 'init.php';

// FINDING RESERVATION

$app->get('/findmyreservation', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'findmyreservation.html.twig');
});

$app->post('/findmyreservation', function (Request $request, Response $response) {
    $data = $request->getParsedBody();

    // Retrieve the email and reservation ID from the form data
    $email = $data['email'];
    $reservationId = $data['reservationId'];

    // Query the database to find the reservation based on the email and reservation ID provided
    $reservation = DB::queryFirstRow("SELECT * FROM reservations WHERE email = %s AND reservation_id = %s", $email, $reservationId);

    if ($reservation) {
        // Query the database to find the corresponding vehicle based on the reservation's vehicle ID
        $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $reservation['vehicle_id']);

        // Add the vehicle information to the reservation array
        $reservation['vehicle'] = $vehicle;

        // Render the reservation details in a new Twig template
        return $this->get('view')->render($response, 'myreservation.html.twig', ['error' => true]);
        
    } else {
        // Render a message indicating that no reservation was found
        return $this->get('view')->render($response, 'myreservation.html.twig',['message' => 'No reservation was found for the provided email and reservation ID.']);
    }

    return $response;
});
