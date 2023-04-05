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

$app->post('/booking/trip-details', function ($request, $response, $args) {

  // extract values submitted
  $data = $request->getParsedBody();
  $firstName = $data['firstName'];
  $lastName = $data['lastName'];
  $address = $data['address'];
  $phone = $data['phone'];
  $email = $data['email'];
  $dob = $data['dob'];
  $vehicleId = $data['vehicleId'];
  $pickDateTime = $data['pickDateTime'];
  $returnDateTime = $data['returnDateTime'];
  $rentalPrice = $data['rentalPrice'];
  $insurance = $data['insurance'];
  $tax = $data['tax'];
  $finalPrice = $data['finalPrice'];
  

  // Insert the customer data into the database
  $customerId = DB::insert('users', array(
      'first_name' => $firstName,
      'last_name' => $lastName,
      'address' => $address,
      'phone' => $phone,
      'email' => $email,
      'dob' => $dob,
      'created_at' => DB::sqleval('NOW()')
  ));

  // Get the vehicle ID
  $vehicleId = DB::queryFirstField('SELECT id FROM vehicles WHERE id = %d', $data['vehicleId']);


  // Update the vehicle table with the rental dates
  DB::update('vehicles', array(
      'start_date' => $pickDateTime,
      'end_date' => $returnDateTime
  ), 'id = %d', $vehicleId);

  // Insert the reservation data into the database
  DB::insert('reservations', array(
      'customer_id' => $customerId,
      'vehicle_id' => $vehicleId,
      'start_date' => $pickDateTime,
      'end_date' => $returnDateTime,
      'rental_price' => $rentalPrice,
      'insurance_price' => $insurance,
      'taxes' => $tax,
      'final_total' => $finalPrice,
      'payment_confirmation' => 0
  ));

  // Redirect the user to a success page
  header('Location: http://carrentalproject.org/findmyreservation');
  
  exit;
});



