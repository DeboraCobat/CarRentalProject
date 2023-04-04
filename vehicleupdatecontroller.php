<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';



// Define the route for editing a vehicle
$app->get('/admin/editvehicle/{id}', function ($request, $response, $args) {
    $vehicleId = $args['id'];

    // Retrieve the vehicle to be edited from the database
    $vehicles = DB::query("SELECT * FROM vehicles WHERE id = %i", $vehicleId);
    $vehicle = reset($vehicles);

    // Render the edit vehicle form with the selected vehicle
    return $this->get('view')->render($response, 'admin/editvehicle.html.twig', ['vehicle' => $vehicle]);
});

// Save method:
class Vehicle
{
    public $id;
    public $make;
    public $model;
    public $year;
    public $color;
    public $license_plate;
    public $daily_rate;
    public $availability;
    public $seats;
    public $lper100;

    // Constructor
    public function __construct($id, $make, $model, $year, $color, $license_plate, $daily_rate, $availability, $seats, $lper100)
    {
        $this->id = $id;
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->color = $color;
        $this->license_plate = $license_plate;
        $this->daily_rate = $daily_rate;
        $this->availability = $availability;
        $this->seats = $seats;
        $this->lper100 = $lper100;
    }

    // Save method
    public function save()
    {
        $result = DB::query(
            "UPDATE vehicles SET make = %s, model = %s, year = %i, color = %s, license_plate = %s, daily_rate = %i, availability = %i, seats = %i, lper100 = %i WHERE id = %i",
            $this->make,
            $this->model,
            $this->year,
            $this->color,
            $this->license_plate,
            $this->daily_rate,
            $this->availability,
            $this->seats,
            $this->lper100 * 100,
            $this->id
        );

        return $result;
    }
}

// Define the route for updating a vehicle 
$app->post('/admin/editvehicle/{id}', function ($request, $response, $args) {
    $vehicleId = $args['id'];

    // Retrieve the vehicle to be edited from the database
    $vehicles = DB::query("SELECT * FROM vehicles WHERE id = %i", $vehicleId);
    $row = reset($vehicles);
    $vehicle = new Vehicle($row['id'], $row['make'], $row['model'], $row['year'], $row['color'], $row['license_plate'], $row['daily_rate'], $row['availability'], $row['seats'], $row['lper100']);

    // Update the vehicle with the submitted data
    $data = $request->getParsedBody();
    $vehicle->make = $data['make'];
    $vehicle->model = $data['model'];
    $vehicle->year = $data['year'];
    $vehicle->color = $data['color'];
    $vehicle->license_plate = $data['license_plate'];
    $vehicle->daily_rate = $data['daily_rate'];
    $vehicle->availability = $data['availability'];
    $vehicle->seats = $data['seats'];
    $vehicle->lper100 = $data['lper100'];


    // Save the updated vehicle to the database
    $result = $vehicle->save();


    // Return a response indicating whether the update was successful
    if ($result) {
        return $response->withStatus(200)->write('Vehicle updated successfully');
    } else {
        return $response->withStatus(500)->write('Failed to update vehicle');
    }
});
