<?php
// session_start();
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;


require_once 'init.php';

///////////////////////////////////////////// AVAILABILITY ONLY ////////////////////////////////////////////
// Get all vehicles from database
$app->get('/selectvehicleavailable', function ($request, $response, $args) {
  $availableVehicles = DB::query("SELECT * FROM vehicles WHERE availability = 1");

  // Render all vehicles template with list of all vehicles
  return $this->get('view')->render($response, 'selectvehicleavailable.html.twig', [
    'availableVehicles' => $availableVehicles,
  ]);
});

////////////////////////////////////////////// SELECT VEHICLE PAGE ///////////////////////////////////////////

// Select a vehicle based on trip details
$app->post('/selectvehicle', function ($request, $response, $args) {
  $pickupDateTime = $request->getParsedBody()['pickup_date'] . ' ' . $request->getParsedBody()['pickup_time'];
  $returnDateTime = $request->getParsedBody()['return_date'] . ' ' . $request->getParsedBody()['return_time'];

  $availableVehicles = DB::query("SELECT id, make, model, year, color, image_filepath FROM vehicles WHERE availability = 1 AND id NOT IN (
      SELECT id FROM vehicles WHERE start_date <= '$returnDateTime' AND end_date >= '$pickupDateTime'
  )");

  return $this->get('view')->render($response, 'selectvehicle.html.twig', [
    'availableVehicles' => $availableVehicles,
    'pickupDateTime' => $pickupDateTime,
    'returnDateTime' => $returnDateTime
  ]);
});
// var_dump($_POST);

///////////////////////////////////////////////// BOOKING PAGE /////////////////////////////////////////////////

$app->get('/booking/trip-details', function ($request, $response, $args) {
  // Retrieve values from the URL
  $vehicleId = $request->getQueryParam('vehicleId');
  $pickupDateTime = $request->getQueryParam('pickupDate') . ' ' . $request->getQueryParam('pickupTime');
  $returnDateTime = $request->getQueryParam('returnDate') . ' ' . $request->getQueryParam('returnTime');

  // Query the database to get the vehicle information
  $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id=%d", $vehicleId);

  // Render the booking details page with the booking information
  return $this->get('view')->render($response, 'booking.html.twig', [
    'vehicle' => $vehicle,
    'pickupDateTime' => $pickupDateTime,
    'returnDateTime' => $returnDateTime,
    // 'vehicleImage' => 'path/to/vehicle/image/' . $ vehicle['image'] // Change the path according to your project structure/

  ]);
});






// 
// // Controller action that renders the booking details page
// function bookingDetails($request, $response, $args) {
//   // Get the vehicle ID from the URL query parameter
//   $vehicleId = $args['vehicleId'];

//   // Retrieve the vehicle details from the database using the ID
//   $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id=%i", $vehicleId);

//   // Get the pickup and return date/time from the URL query parameters
//   $pickupDateTime = $request->getQueryParam('pickupDateTime');
//   $returnDateTime = $request->getQueryParam('returnDateTime');

//   // Render the booking details page and pass the variables to the template
//   return $this->get('view')->render($response, 'booking.html.twig', [
//       'vehicle' => $vehicle,
//       'pickupDateTime' => $pickupDateTime,
//       'returnDateTime' => $returnDateTime
//   ]);
// }







/////////////////////////////////// abandoned code /////////////// might reuse later ////////////


// Display trip details form
// $app->get('/selectdate', function ($request, $response, $args) {
//   return $this->get('view')->render($response, 'selectdate.html.twig');
// });

// Display available vehicles for selected dates
// $app->get('/selectvehicle', function ($request, $response, $args) {
//   $pickupDateTime = $request->getQueryParams()['pickup_date'] . ' ' . $request->getQueryParams()['pickup_time'];
//   $returnDateTime = $request->getQueryParams()['return_date'] . ' ' . $request->getQueryParams()['return_time'];

//   $availableVehicles = DB::query("SELECT id, make, model, year, color FROM vehicles WHERE availability = 1 AND id NOT IN (
//     SELECT id FROM vehicles WHERE (pickup_date >= '$pickupDateTime' AND pickup_date < '$returnDateTime') OR (return_date > '$pickupDateTime' AND return_date <= '$returnDateTime')
// )");

//   return $this->get('view')->render($response, 'selectvehicle.html.twig', [
//     'availableVehicles' => $availableVehicles,
//     'pickupDateTime' => $pickupDateTime,
//     'returnDateTime' => $returnDateTime
//   ]);
// });

// $app->post('/booking/{vehicle_id}', function ($request, $response, $args) {
//   $pickupDateTime = $request->getParsedBody()['pickup_date'] . ' ' . $request->getParsedBody()['pickup_time'];
//   $returnDateTime = $request->getParsedBody()['return_date'] . ' ' . $request->getParsedBody()['return_time'];

//   // Do something with the pickupDateTime and returnDateTime values, such as saving them to a database

//   return $this->get('view')->render($response, 'confirmation.html.twig', [
//       'vehicleId' => $args['vehicle_id'],
//       'pickupDateTime' => $pickupDateTime,
//       'returnDateTime' => $returnDateTime
//   ]);
// });


// $pickupDateTime = $request->getParsedBody()['pickup_date'] . ' ' . $request->getParsedBody()['pickup_time'];
// $returnDateTime = $request->getParsedBody()['return_date'] . ' ' . $request->getParsedBody()['return_time'];