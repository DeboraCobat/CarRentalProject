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


// VEHICLES -----------------------------------------------------------------------------
// $app->get('/admin/editvehicle', function (Request $request, Response $response) {
//     return $this->get('view')->render($response, 'admin/editvehicle.html.twig');
// });

// Define the route for editing a vehicle
$app->get('/admin/editvehicle', function ($request, $response, $args) {
    // Retrieve all vehicles from the database
    $vehicles = $this->db->query('SELECT * FROM vehicles')->fetchAll();
    
    // Render the edit vehicle form with the list of vehicles
    return $this->view->render($response, 'admin/editvehicle.html.twig', [
        'vehicles' => $vehicles
    ]);
});

// Define the route for updating a vehicle
$app->post('/admin/editvehicle/{id}', function ($request, $response, $args) {
    $vehicleId = $args['id'];
    
    // Retrieve the vehicle to be edited from the database
    $vehicle = $this->db->query('SELECT * FROM vehicles WHERE id = ' . $vehicleId)->fetch();
    
    // Update the vehicle with the submitted data
    $vehicle->make = $request->getParam('make');
    $vehicle->model = $request->getParam('model');
    $vehicle->year = $request->getParam('year');
    $vehicle->color = $request->getParam('color');
    $vehicle->license_plate = $request->getParam('license_plate');
    $vehicle->daily_rate = $request->getParam('daily_rate');
    $vehicle->availability = $request->getParam('availability');
    $vehicle->seats = $request->getParam('seats');
    $vehicle->lper100 = $request->getParam('lper100');
    
    // Save the updated vehicle to the database
    $result = $vehicle->save();
    
    // Redirect to the list of all vehicles
    return $response->withRedirect('/admin/vehicles');
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
