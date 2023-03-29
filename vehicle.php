<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;


require_once 'init.php';

$app->get('/admin/adminpanel', function ($request, $response, $args) {
  return $this->get('view')->render($response, 'admin/adminpanel.html.twig');
});


// VEHICLES

// STATE 1: DISPLAY add vehicle form
$app->get('/admin/addvehicle', function ($request, $response, $args) {
  return $this->get('view')->render($response, 'admin/addvehicle.html.twig');
});

//used to understand how data goes
// $data = print_r($auctions[1]);
//'data' => $data, 

// DISPLAY ALL VEHICLES function /////////////////////////////////////////////////////////
$app->get('/admin/vehicleslist', function ($request, $response, $args) {
  $vehicles = DB::query("SELECT *, image_filepath AS image FROM vehicles");

  return $this->get('view')->render($response, 'admin/vehicleslist.html.twig', ['vehicles' => $vehicles]);
});

// ADD VEHICLE function //////////////////////////////////////////////////////////////////
$app->post('/admin/addvehicle', function ($request, $response, $args) {

  if (($_FILES['file']['name'] != "")) {
      // Where the file is going to be stored
      $target_dir = "uploads/";
      $file = $_FILES['file']['name'];
      $path = pathinfo($file);
      $filename = $path['filename'];
      $ext = $path['extension'];
      $temp_name = $_FILES['file']['tmp_name'];
      $path_filename_ext = $target_dir . $filename . "." . $ext;

      // Check if file already exists
      if (file_exists($path_filename_ext)) {
          echo "Sorry, file already exists.";
      } else {
          move_uploaded_file($temp_name, $path_filename_ext);
          echo "Congratulations! File Uploaded Successfully.";
      }
  }

  // extract values submitted
  $data = $request->getParsedBody();
  $make = $data['make'];
  $model = $data['model'];
  $year = $data['year'];
  $color = $data['color'];
  $licensePlate = $data['license_plate'];
  $dailyRate = $data['daily_rate'];
  $availability = $data['availability'];
  $seats = $data['seats'];
  $lper100 = $data['lper100'];
  // $filename = $data['file'];

  //TODO go further with the validation
  // validate
  $errorList = [];
  if (strlen($make) < 2 || strlen($make) > 50) {
      $errorList[] = "Make must be 2-50 characters long";
      $make = "";
  }
  if (strlen($model) < 1 || strlen($model) > 50) {
      $errorList[] = "Model must be 1-50 characters long";
      $model = "";
  }
  if (filter_var($year, FILTER_VALIDATE_INT) === false || $year < 1900 || $year > (int)date('Y') + 1) {
      $errorList[] = "Year must be a valid integer number between 1900 and " . ((int)date('Y') + 1);
      $year = "";
  }
  if (strlen($color) < 1 || strlen($color) > 50) {
      $errorList[] = "Color must be 1-50 characters long";
      $color = "";
  }
  if (strlen($licensePlate) < 1 || strlen($licensePlate) > 10) {
      $errorList[] = "License plate must be 1-10 characters long";
      $licensePlate = "";
  }
  if (filter_var($dailyRate, FILTER_VALIDATE_FLOAT) === false || $dailyRate < 0 || $dailyRate > 10000) {
      $errorList[] = "Daily rate must be a valid float number between 0 and 10000";
      $dailyRate = "";
  }
  if (!in_array($availability, array(0, 1))) {
      $errorList[] = "Availability must be either 0 or 1";
      $availability = 0;
  }
  if (filter_var($seats, FILTER_VALIDATE_INT) === false || $seats < 1 || $seats > 20) {
      $errorList[] = "Number of seats must be a valid integer between 1 and 20";
      $seats = "";
  }
  if (filter_var($lper100, FILTER_VALIDATE_FLOAT) === false || $lper100 < 0 || $lper100 > 99) {
      $errorList[] = "Liters per 100km must be a valid float number between 0 and 99";
      $lper100 = "";
  }
  // if (isset($imageFilepath['image_filepath'])) {
  //     // do something with $car['image_filepath']
  // } else {
  //     // handle the case where 'image_filepath' is not set
  // }


  if ($errorList) { // STATE 2: errors
      $valuesList = [
          'make' => $make,
          'model' => $model,
          'year' => $year,
          'color' => $color,
          'license_plate' => $licensePlate,
          'daily_rate' => $dailyRate,
          'seats' => $seats,
          'lper100' => $lper100,
          'availability' => $availability,
          // 'image_filepath' => $location
      ];
      return $this->get('view')->render($response, 'admin/addvehicle.html.twig', ['errorList' => $errorList, 'v' => $valuesList]);
  } else {


      // STATE 3
      // INSERT VEHICLE into database
      DB::insert('vehicles', [
          'make' => $make,
          'model' => $model,
          'year' => $year,
          'color' => $color,
          'license_plate' => $licensePlate,
          'daily_rate' => $dailyRate,
          'availability' => $availability,
          'seats' => $seats,
          'lper100' => $lper100,
          'image_filepath' => $path_filename_ext
      ]);
      $successMessage = "Vehicle added successfully!";
      return $this->get('view')->render($response, 'http://carrentalproject.org/admin/vehicleslist', ['successMessage' => $successMessage]);
      $errorMessage = "Error adding vehicle to database: ";
      return $this->get('view')->render($response, 'admin/addvehicle.html.twig', ['errorMessage' => $errorMessage]);
  }
});

// TO FIX - GET vehicle by its make 
$app->get('/vehicle', function ($request, $response, $args) {
  $make = $request->getQueryParam('make'); // get the make query parameter from the request
  $query = "SELECT * FROM vehicles";
  $params = array();

  if ($make) {
      $query .= " WHERE make = '%s'";
      $params[] = $make;
  }

  $vehicles = DB::query($query, $params);
  return $this->get('view')->render($response, 'admin/vehicleslist.html.twig', ['vehicles' => $vehicles]);
});


// EDIT VEHICLE FUNCTIONALITY ///////////////////////////////////////////// DOESNT WORK /////////// YET

// GET route to retrieve the vehicle with the given ID
$app->get('/admin/editvehicle/{id}', function ($request, $response, $args) {
  $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $args['id']);
  return $this->get('view')->render($response, 'admin/editvehicle.html.twig', ['vehicle' => $vehicle]);
});

// POST route to update the vehicle with the given ID
$app->post('/admin/editvehicle/{id}', function ($request, $response, $args) {
  $data = $request->getParsedBody();
  $id = $args['id'];
  
  // Loop through each column in the vehicles table and update it with the corresponding value in the form data
  $columns = ['make', 'model', 'year', 'color', 'license_plate', 'daily_rate', 'availability', 'seats', 'lper100'];
  $updates = [];
  foreach ($columns as $column) {
      if (isset($data[$column])) {
          $updates[$column] = $data[$column];
      }
  }
  DB::update('vehicles', $updates, "id=%i", $id);
  
  // Redirect back to the vehicles list page
  return $response->withHeader('Location', '/admin/vehicleslist')->withStatus(302);
});



// VIEW VEHICLE function //////////////////////////////////////////////////////////////////
$app->get('/admin/vehicles/{id}', function ($request, $response, $args) {
  $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $args['id']);
  //var_dump($vehicle); // Debugging code to show vehicle info
  if (!$vehicle) {
      $errorMessage = "Vehicle not found";
      return $this->get('view')->render($response, 'admin/vehicleslist.html.twig', ['errorMessage' => $errorMessage]);
  }
  return $this->get('view')->render($response, 'admin/viewvehicle.html.twig', ['vehicle' => $vehicle]);
});



// DELETE VEHICLE function //////////////////////////////////////////////////////////////////
$app->get('/admin/deletevehicle/{id}', function ($request, $response, $args) {
  $vehicle = DB::queryFirstRow("SELECT * FROM vehicles WHERE id = %i", $args['id']);
  return $this->get('view')->render($response, 'admin/deletevehicle.html.twig', ['vehicle' => $vehicle]);
});

$app->post('/admin/deletevehicle/{id}', function ($request, $response, $args) {
  $id = $args['id'];
  $result = DB::delete('vehicles', "id=%i", $id);
  if ($result) {
      echo '<script>alert("Vehicle with id ' . $id . ' was deleted."); window.location.href="/admin/vehicleslist";</script>';
  } else {
      echo '<script>alert("Vehicle with id ' . $id . ' was not deleted."); window.location.href="/admin/vehicleslist";</script>';
  }
});