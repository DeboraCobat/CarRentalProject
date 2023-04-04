<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';

/// CONTROLER TO  UPDATE (edit)


// STEP 1: Displaying screens

//USERS
$app->get('/admin/edituser', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'admin/edituser.html.twig');
});


// VEHICLES
$app->get('/admin/editvehicle', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'admin/editvehicle.html.twig');
});


//RESERVATIONS
$app->get('/admin/editreservation', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'admin/editreservation.html.twig');
});




// EDIT VEHICLE FUNCTIONALITY ///////////////////////////////////////////// DOESNT WORK /////////// YET

// // GET route to retrieve the vehicle with the given ID
// $app->get('/admin/editvehicle/{id}', function ($request, $response, $args) {
//   $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $args['id']);
//   return $this->get('view')->render($response, 'admin/editvehicle.html.twig', ['vehicle' => $vehicle]);
// });

// // POST route to update the vehicle with the given ID
// $app->post('/admin/editvehicle/{id}', function ($request, $response, $args) {
//   $data = $request->getParsedBody();
//   $id = $args['id'];

//   // Loop through each column in the vehicles table and update it with the corresponding value in the form data
//   $columns = ['make', 'model', 'year', 'color', 'license_plate', 'daily_rate', 'availability', 'seats', 'lper100'];
//   $updates = [];
//   foreach ($columns as $column) {
//     if (isset($data[$column])) {
//       $updates[$column] = $data[$column];
//     }
//   }
//   DB::update('vehicles', $updates, "id=%i", $id);

//   // Redirect back to the vehicles list page
//   return $response->withHeader('Location', '/admin/vehicleslist')->withStatus(302);
// });
