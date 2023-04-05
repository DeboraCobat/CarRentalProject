<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';

// FINDING RESERVATION WITHOUT LOGIN

$app->get('/findmyreservation', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'findmyreservation.html.twig');
});

$app->post('/findmyreservation', function (Request $request, Response $response) use ($log) {
    $data = $request->getParsedBody();
    $reservationId = isset($data['reservationId']) ? $data['reservationId'] : '';

    $reservations = DB::query("SELECT * FROM reservations WHERE id = %i", $reservationId);

    if ($reservations) {
        foreach ($reservations as &$reservation) {

            $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $reservation['vehicle_id']);
            $reservation['vehicle'] = $vehicle;
        }


        return $this->get('view')->render($response, 'myreservation.html.twig', ['reservations' => $reservations]);
    } else {
        return $this->get('view')->render($response, 'myreservation.html.twig', ['message' => 'No reservation was found for the provided reservation ID.']);
    }

    return $response;
});


