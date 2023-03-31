<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;


require_once 'init.php';


// Get all vehicles from database
$app->get('/selectvehicleavailable', function ($request, $response, $args) {
  $availableVehicles = DB::query("SELECT * FROM vehicles WHERE availability = 1");

  // Render all vehicles template with list of all vehicles
  return $this->get('view')->render($response, 'selectvehicleavailable.html.twig', [
      'availableVehicles' => $availableVehicles,
  ]);
});

// $app->post('/selectvehicle', function ($request, $response, $args) {
//   // Retrieve start and end dates and times from request body
//   $start_date = $request->getParsedBody()['start-date'];
//   $start_time = $request->getParsedBody()['start-time'];
//   $end_date = $request->getParsedBody()['end-date'];
//   $end_time = $request->getParsedBody()['end-time'];

//   // Query database for available vehicles during specified time period
//   $availableVehicles = DB::query("SELECT * FROM vehicles WHERE availability = 1 AND id NOT IN (SELECT vehicle_id FROM reservations WHERE start_date_time < '$end_date $end_time' AND end_date_time > '$start_date $start_time')");

//   // Render select vehicle template with list of available vehicles
//   return $this->view->render($response, 'selectvehicle.html.twig', [
//       'availableVehicles' => $availableVehicles,
//       'startDate' => $start_date,
//       'startTime' => $start_time,
//       'endDate' => $end_date,
//       'endTime' => $end_time
//   ]);
// });

///////////////////////////////////////////////////////////////////////////////
// $app->get('/selectvehicle', function ($request, $response, $args) {
//   // Render select vehicle template with empty form
//   return $this->get('view')->render($response, 'selectvehicle.html.twig');
// });

// // Select a vehicle based on trip details
// $app->post('/selectvehicle', function ($request, $response, $args) {
//   $pickupDateTime = $request->getParsedBody()['pickup_date'] . ' ' . $request->getParsedBody()['pickup_time'];
//   $returnDateTime = $request->getParsedBody()['return_date'] . ' ' . $request->getParsedBody()['return_time'];

//   $availableVehicles = DB::query("SELECT * FROM vehicles WHERE availability = 1 AND id NOT IN (
//       SELECT vehicle_id FROM reservations WHERE start_date <= '$returnDateTime' AND end_date >= '$pickupDateTime'
//   )");

//   return $this->get('view')->render($response, 'selectvehicle.html.twig', [
//       'availableVehicles' => $availableVehicles,
//       'pickupDateTime' => $pickupDateTime,
//       'returnDateTime' => $returnDateTime
//   ]);
// });

// Select a vehicle based on trip details
$app->post('/selectvehicle', function ($request, $response, $args) {
  $pickupDateTime = $request->getParsedBody()['pickup_date'] . ' ' . $request->getParsedBody()['pickup_time'];
  $returnDateTime = $request->getParsedBody()['return_date'] . ' ' . $request->getParsedBody()['return_time'];

  $availableVehicles = DB::query("SELECT id FROM vehicles WHERE availability = 1 AND id NOT IN (
      SELECT id FROM vehicles WHERE start_date <= '$returnDateTime' AND end_date >= '$pickupDateTime'
  )");

  return $this->get('view')->render($response, 'selectvehicle.html.twig', [
      'availableVehicles' => $availableVehicles,
      'pickupDateTime' => $pickupDateTime,
      'returnDateTime' => $returnDateTime
  ]);
});

// Display trip details form
// $app->get('/selectdate', function ($request, $response, $args) {
//   return $this->get('view')->render($response, 'selectdate.html.twig');
// });

// Display available vehicles for selected dates
$app->get('/selectvehicle', function ($request, $response, $args) {
  $pickupDateTime = $request->getQueryParams()['pickup_date'] . ' ' . $request->getQueryParams()['pickup_time'];
  $returnDateTime = $request->getQueryParams()['return_date'] . ' ' . $request->getQueryParams()['return_time'];

  $availableVehicles = DB::query("SELECT id FROM vehicles WHERE availability = 1 AND id NOT IN (
    SELECT id FROM vehicles WHERE (pickup_date >= '$pickupDateTime' AND pickup_date < '$returnDateTime') OR (return_date > '$pickupDateTime' AND return_date <= '$returnDateTime')
)");

  return $this->get('view')->render($response, 'selectvehicle.html.twig', [
      'availableVehicles' => $availableVehicles,
      'pickupDateTime' => $pickupDateTime,
      'returnDateTime' => $returnDateTime
  ]);
});

// $pickupDateTime = $request->getParsedBody()['pickup_date'] . ' ' . $request->getParsedBody()['pickup_time'];
// $returnDateTime = $request->getParsedBody()['return_date'] . ' ' . $request->getParsedBody()['return_time'];

