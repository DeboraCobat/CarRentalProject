<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';

// FINDING RESERVATION USER LOGGED

$app->get('/myreservation', function (Request $request, Response $response) {
    // return $this->get('view')->render($response, 'myreservation.html.twig');
    $userId = $_SESSION['user']['id'];

    $reservation = DB::queryFirstRow("SELECT * FROM reservations WHERE customer_id = %i", $userId);

    return $this->get('view')->render($response, 'myreservation.html.twig', ['reservation' => $reservation]);
});

$app->post('/myreservation', function (Request $request, Response $response, $args) use ($log) {
    $userId = $_SESSION['user']['id'];

    $reservation = DB::queryFirstRow("SELECT * FROM reservations WHERE customer_id = %i", $userId);

    return $this->get('view')->render($response, 'myreservation.html.twig', ['reservation' => $reservation]);
        
});

// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;

// require_once 'init.php';

// // FINDING RESERVATION USER LOGGED
// $app->get('/myreservation', function (Request $request, Response $response) {
//     $userId = $_SESSION['user']['id'];

//     $reservation = DB::queryFirstRow("SELECT * FROM reservations WHERE customer_id = %i", $userId);

//     return $this->get('view')->render(
//         $response, 
//         'myreservation.html.twig', 
//         ['reservation' => $reservation]
//     );
// });

// $app->post('/myreservation', function (Request $request, Response $response, array $args) use ($log) {
//     $userId = $_SESSION['user']['id'];

//     $reservation = DB::queryFirstRow("SELECT * FROM reservations WHERE customer_id = %i", $userId);

//     return $this->get('view')->render(
//         $response, 
//         'myreservation.html.twig', 
//         ['reservation' => $reservation]
// //     );
// });


























   // if ($reservation) {
    //     return $this->get('view')->render($response, 'myreservation.html.twig', ['error' => true]);
    // } else {
    //     return $this->get('view')->render($response, 'myreservation.html.twig', ['message' => 'No reservation was found for the provided email and reservation ID.']);
    // }

    // return $response;





    // $data = $request->getParsedBody();

    // // Retrieve the email and reservation ID from the form data
    // $email = $data['email'];
    // $reservationId = $data['reservationId'];

    
    // Query the database to find the reservation based on the email and reservation ID provided

   
        // // Query the database to find the corresponding vehicle based on the reservation's vehicle ID
        // $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $reservation['vehicle_id']);

        // // Add the vehicle information to the reservation array
        // $reservation['vehicle'] = $vehicle;

        // Render the reservation details in a new Twig template
        
        // Render a message indicating that no reservation was found

