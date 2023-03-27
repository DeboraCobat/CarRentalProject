<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;

require __DIR__ . '/vendor/autoload.php';

DB::$dbName = 'carrental';
DB::$user = 'carrental';
DB::$password = '1lvTox19lz]Itajh';
DB::$host = 'localhost';

// Create Container
$container = new Container();
AppFactory::setContainer($container);

// Set view in Container
// tmpl cache is where TWIG will store the generated php from the templates. Avoids the overhead of parsing the templates on every request
$container->set('view', function () {
    return Twig::create(__DIR__ . '/templates'); //, ['cache' => __DIR__ . '/tmplcache', 'debug' => true]);
});

// creates a new instance of a Slim Framework application
$app = AppFactory::create();

// Add Twig-View Middleware
$app->add(TwigMiddleware::createFromContainer($app));

$errorMiddleware = $app->addErrorMiddleware(true, true, true);



/////////////////////////////////////////////////////////////////////// UPDATE
// URL HANDLERS GO BELOW

// ADMIN PANEL

// STATE 1: DISPLAY admin panel

$app->get('/adminpanel', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'adminpanel.html.twig');
});


// VEHICLES

// STATE 1: DISPLAY add vehicle form
$app->get('/addvehicle', function ($request, $response, $args) {
    return $this->get('view')->render($response, 'addvehicle.html.twig');
});

//used to understand how data goes
// $data = print_r($auctions[1]);
//'data' => $data, 

// DISPLAY all vehicles
$app->get('/vehicleslist', function ($request, $response, $args) {
    $vehicles = DB::query("SELECT * FROM vehicles");
    return $this->get('view')->render($response, 'vehicleslist.html.twig', ['vehicles' => $vehicles]);
});

// STATE 2&3: receiving a submission
$app->post('/addvehicle', function ($request, $response, $args) {


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
    $imageFilepath = $data['image'];

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
    if (!in_array($availability, array('true', 'false'))) {
        $errorList[] = "Availability must be either 'true' or 'false'";
        $availability = "";
    }
    if (filter_var($seats, FILTER_VALIDATE_INT) === false || $seats < 1 || $seats > 20) {
        $errorList[] = "Number of seats must be a valid integer between 1 and 20";
        $seats = "";
    }
    if (filter_var($lper100, FILTER_VALIDATE_FLOAT) === false || $lper100 < 0 || $lper100 > 99) {
        $errorList[] = "Liters per 100km must be a valid float number between 0 and 99";
        $lper100 = "";
    }
    if (isset($imageFilepath['image_filepath'])) {
        // do something with $car['image_filepath']
    } else {
        // handle the case where 'image_filepath' is not set
    }


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
            'availability' => $availability
        ];
        return $this->get('view')->render($response, 'addvehicle.html.twig', ['errorList' => $errorList, 'v' => $valuesList]);
    } else {
        // STATE 3: success
        // insert vehicle into database
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
            'image_filepath' => $imageFilepath
        ]);
        $successMessage = "Vehicle added successfully!";
        return $this->get('view')->render($response, 'addvehicle.html.twig', ['successMessage' => $successMessage]);
        $errorMessage = "Error adding vehicle to database: ";
        return $this->get('view')->render($response, 'addvehicle.html.twig', ['errorMessage' => $errorMessage]);
    }
});


$app->run();
