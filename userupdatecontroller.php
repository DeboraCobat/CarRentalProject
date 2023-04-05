<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';


// STEP 1: Displaying screens

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


    // Save 
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


// Define the route 
$app->post('/admin/edituser/{id}', function ($request, $response, $args) {
    $userId = $args['id'];

    // Retrieve the user
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

    $result = $user->save();

    if ($result) {
        return $response->withStatus(200)->write('User updated successfully');
    } else {
        return $response->withStatus(500)->write('Failed to update user');
    }

//     //Redirect back to the user list page
// return $response->withRedirect('/admin/users');

});