<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;


require_once 'init.php';

// Route for displaying the reservation search form
$app->get('/findmyreservation', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'findmyreservation.html.twig');
});

// Route for processing the form submission
$app->post('/findmyreservation', function (Request $request, Response $response) {
    $data = $request->getParsedBody();

    // Retrieve the email and reservation ID from the form data
    $email = $data['email'];
    $reservationId = $data['reservation_id'];

    // Query the database to find the reservation based on the reservation ID provided
    $reservation = DB::queryFirstRow("SELECT * FROM reservations WHERE id = %d", $reservationId);

    if (!$reservation) {
        // If reservation is not found, return a 404 response
        return $response->withStatus(404)->write('Reservation not found.');
    }

    // Query the database to find the customer based on their email
    $customer = DB::queryFirstRow("SELECT * FROM users WHERE email = %s", $email);

    if (!$customer) {
        // If customer is not found, return a 404 response
        return $response->withStatus(404)->write('Customer not found.');
    }

    // Check if the customer ID matches the one in the reservation
    if ($customer['id'] !== $reservation['customer_id']) {
        // If customer ID doesn't match, return a 404 response
        return $response->withStatus(404)->write('Reservation not found for this email and reservation ID combination.');
    }

    // Retrieve the vehicle details based on the vehicle ID in the reservation
    $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %d", $reservation['vehicle_id']);

    // Render the reservation details in a new Twig template
    return $this->get('view')->render($response, 'myreservation.html.twig', [
        'reservation' => $reservation,
        'customer' => $customer,
        'vehicle' => $vehicle
    ]);
});