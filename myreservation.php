<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';
require_once 'secrets.php';

// FINDING RESERVATION USER LOGGED

$app->get('/myreservation', function (Request $request, Response $response) {
    $userId = $_SESSION['user']['id'];

    $reservations = DB::query("SELECT * FROM reservations WHERE customer_id = %i", $userId);

    if ($reservations) {
        foreach ($reservations as &$reservation) {
            $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $reservation['vehicle_id']);
            $reservation['vehicle'] = $vehicle;
        }

        return $this->get('view')->render($response, 'myreservation.html.twig', ['reservations' => $reservations]);
    } else {
        return $this->get('view')->render($response, 'myreservation.html.twig', ['message' => 'No reservation was found for the provided email and reservation ID.']);
    }

    return $response;
});


////////////////////////////////////////// STRIPE //////////////////////////////