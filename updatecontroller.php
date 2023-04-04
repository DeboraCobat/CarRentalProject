<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';

/// CONTROLER TO  UPDATE (edit)


// STEP 1: Displaying screens

//USERS
// editing a user
$app->get('/admin/edituser/{id}', function ($request, $response, $args) {
    $userId = $args['id'];

    // Retrieve the user 
    $users = DB::query("SELECT * FROM users WHERE id = %i", $userId);
    $user = reset($users);

    // Render the edit user form with the selected user
    return $this->get('view')->render($response, 'admin/edituser.html.twig', ['user' => $user]);
});

// User class
class User
{
    public $id;
    public $first_name;
    public $last_name;
    public $email;
    public $phone;
    public $address;
    public $dob;
    // public $drivers_license;
    // public $license_expiration;

    // Constructor
    public function __construct($id, $first_name, $last_name, $email, $phone, $address, $dob)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->dob = $dob;
        // $this->drivers_license = $drivers_license;
        // $this->license_expiration = $license_expiration;
    }


    // Save method
    public function save()
    {
        $result = DB::query(
            "UPDATE users SET first_name = %s, last_name = %s, email = %s, phone = %s, address = %s, dob = %s WHERE id = %i",
            $this->first_name,
            $this->last_name,
            $this->email,
            $this->phone,
            $this->address,
            $this->dob,
            // $this->drivers_license,
            // $this->license_expiration,
            $this->id
        );

        return $result;
    }
}


// Define the route for updating a user
$app->post('/admin/edituser/{id}', function ($request, $response, $args) {
    $userId = $args['id'];

    // Retrieve the user to be edited from the database
    $users = DB::query("SELECT * FROM users WHERE id = %i", $userId);
    $row = reset($users);
    $user = new User($row['id'], $row['first_name'], $row['last_name'], $row['email'], $row['phone'], $row['address'], $row['dob']);

    // Update the user with the submitted data
    $data = $request->getParsedBody();
    $user->first_name = $data['first_name'];
    $user->last_name = $data['last_name'];
    $user->email = $data['email'];
    $user->phone = $data['phone'];
    $user->address = $data['address'];
    $user->dob = $data['dob'];
    // $user->drivers_license = $data['drivers_license'];
    // $user->license_expiration = $data['license_expiration'];
    $user->save();

    // Save the updated user to the database
    $result = $user->save();


    // Return a response indicating whether the update was successful
    if ($result) {
        return $response->withStatus(200)->write('User updated successfully');
    } else {
        return $response->withStatus(500)->write('Failed to update user');
    }

    // Redirect back to the user list page
return $response->withRedirect('/admin/users');

});

// // VEHICLES -----------------------------------------------------------------------------

// // Define the route for editing a vehicle
// $app->get('/admin/editvehicle/{id}', function ($request, $response, $args) {
//     $vehicleId = $args['id'];

//     // Retrieve the vehicle to be edited from the database
//     $vehicles = DB::query("SELECT * FROM vehicles WHERE id = %i", $vehicleId);
//     $vehicle = reset($vehicles);

//     // Render the edit vehicle form with the selected vehicle
//     return $this->get('view')->render($response, 'admin/editvehicle.html.twig', ['vehicle' => $vehicle]);
// });

// // Save method:
// class Vehicle
// {
//     public $id;
//     public $make;
//     public $model;
//     public $year;
//     public $color;
//     public $license_plate;
//     public $daily_rate;
//     public $availability;
//     public $seats;
//     public $lper100;

//     // Constructor
//     public function __construct($id, $make, $model, $year, $color, $license_plate, $daily_rate, $availability, $seats, $lper100)
//     {
//         $this->id = $id;
//         $this->make = $make;
//         $this->model = $model;
//         $this->year = $year;
//         $this->color = $color;
//         $this->license_plate = $license_plate;
//         $this->daily_rate = $daily_rate;
//         $this->availability = $availability;
//         $this->seats = $seats;
//         $this->lper100 = $lper100;
//     }

//     // Save method
// public function save()
// {
//     $result = DB::query(
//         "UPDATE vehicles SET make = %s, model = %s, year = %i, color = %s, license_plate = %s, daily_rate = %i, availability = %i, seats = %i, lper100 = %i WHERE id = %i",
//         $this->make,
//         $this->model,
//         $this->year,
//         $this->color,
//         $this->license_plate,
//         $this->daily_rate,
//         $this->availability,
//         $this->seats,
//         $this->lper100 * 100,
//         $this->id
//     );

//     return $result;
// }

// }

// // Define the route for updating a vehicle 
// $app->post('/admin/editvehicle/{id}', function ($request, $response, $args) {
//     $vehicleId = $args['id'];

//     // Retrieve the vehicle to be edited from the database
//     $vehicles = DB::query("SELECT * FROM vehicles WHERE id = %i", $vehicleId);
//     $row = reset($vehicles);
// $vehicle = new Vehicle($row['id'], $row['make'], $row['model'], $row['year'], $row['color'], $row['license_plate'], $row['daily_rate'], $row['availability'], $row['seats'], $row['lper100']);

// // Update the vehicle with the submitted data
// $data = $request->getParsedBody();
// $vehicle->make = $data['make'];
// $vehicle->model = $data['model'];
// $vehicle->year = $data['year'];
// $vehicle->color = $data['color'];
// $vehicle->license_plate = $data['license_plate'];
// $vehicle->daily_rate = $data['daily_rate'];
// $vehicle->availability = $data['availability'];
// $vehicle->seats = $data['seats'];
// $vehicle->lper100 = $data['lper100'];


//     // Save the updated vehicle to the database
//     $result = $vehicle->save();



// //// Define the route to update a vehicle
// // $app->post('/vehicles/update/{id}', function ($request, $response, $args) use ($db) {

// //     // Perform the update operation
// //     $result = $db->updateVehicle($args['id'], $request->getParsedBody());

// //     // Return a response indicating whether the update was successful
// //     if ($result) {
// //         // Display a success message and a button to return to the admin/vehicleslist page
// //         $message = 'Vehicle updated successfully';
// //         $button = '<a href="/admin/vehicleslist" class="btn btn-primary">Return to Vehicles List</a>';
// //         return $this->view->render($response, 'message.html', ['message' => $message, 'button' => $button]);
// //     } else {
// //         // Display an error message and a button to return to the admin/vehicleslist page
// //         $message = 'Failed to update vehicle';
// //         $button = '<a href="/admin/vehicleslist" class="btn btn-primary">Return to Vehicles List</a>';
// //         return $this->view->render($response, 'message.html', ['message' => $message, 'button' => $button])->withStatus(500);
// //     }
// // });

//     // Return a response indicating whether the update was successful
//     if ($result) {
//         return $response->withStatus(200)->write('Vehicle updated successfully');
//     } else {
//         return $response->withStatus(500)->write('Failed to update vehicle');
//     }
// });



// //RESERVATIONS -------------------------------------------------------------------------
// $app->get('/admin/editreservation', function (Request $request, Response $response) {
//     return $this->get('view')->render($response, 'admin/editreservation.html.twig');
// });



