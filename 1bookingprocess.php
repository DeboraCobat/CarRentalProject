<?php

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

  $availableVehicles = DB::query("SELECT id, make, model, year, color FROM vehicles WHERE availability = 1 AND id NOT IN (
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

  $availableVehicles = DB::query("SELECT id, make, model, year, color FROM vehicles WHERE availability = 1 AND id NOT IN (
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

///////////////////////////////////////////////// BOOKING PAGE /////////////////////////////////////////////////

$app->get('/vehicle/{id}', function ($request, $response, $args) {
  $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $args['id']);

  // Render the vehicle details page with the selected vehicle data
  return $this->get('view')->render($response, 'vehicle.html.twig', [
    'vehicle' => $vehicle
  ]);
});

$app->get('/booking/{id}', function ($request, $response, $args) {
  // Get the vehicle from the database
  $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id=%d", $args['id']);

  // Render the booking form template
  return $this->get('view')->render($response, 'vehicle.html.twig', [
    'vehicle' => $vehicle,
  ]);
});

// Handle booking form submission
$app->post('/booking/{id}', function ($request, $response, $args) {
  // Get form data
  $vehicleId = $args['id'];
  $pickupDate = $request->getParam('pickup_date');
  $returnDate = $request->getParam('return_date');
  $name = $request->getParam('name');
  $address = $request->getParam('address');
  $phone = $request->getParam('phone');
  $email = $request->getParam('email');
  $dateOfBirth = $request->getParam('date_of_birth');
  $licenseNumber = $request->getParam('license_number');
  $licenseExpiration = $request->getParam('license_expiration');

  // Calculate rental days
  $pickupDateTime = new DateTime($pickupDate);
  $returnDateTime = new DateTime($returnDate);
  $rentalDays = $pickupDateTime->diff($returnDateTime)->days;

  // Get vehicle from database
  $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $vehicleId);

  // Calculate rental price
  $rentalPrice = $vehicle['price'] * $rentalDays;

  // Calculate sales tax
  $salesTax = $rentalPrice * 0.15;

  // Calculate total price
  $totalPrice = $rentalPrice + $salesTax;

  // Insert user into database
  $userId = DB::insert('users', array(
    'name' => $name,
    'address' => $address,
    'phone' => $phone,
    'email' => $email,
    'date_of_birth' => $dateOfBirth,
    'license_number' => $licenseNumber,
    'license_expiration' => $licenseExpiration
  ));

  // Insert reservation into database
  $reservationId = DB::insert('reservations', array(
    'vehicle_id' => $vehicleId,
    'user_id' => $userId,
    'pickup_date' => $pickupDate,
    'return_date' => $returnDate,
    'rental_days' => $rentalDays,
    'rental_price' => $rentalPrice,
    'sales_tax' => $salesTax,
    'total_price' => $totalPrice
  ));

  // Redirect to confirmation page
  return $response->withRedirect('/confirmation/' . $reservationId);
});
