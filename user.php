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


// DISPLAY ALL USERS function
$app->get('/admin/userslist', function ($request, $response, $args) {
  $users = DB::query("SELECT * FROM users");

  return $this->get('view')->render($response, 'admin/userslist.html.twig', ['users' => $users]);
});

////////////////////ADD USER

$app->get('/admin/adduser', function ($request, $response, $args) {
  $successMessage = '';
  $errorList = [];
  return $this->get('view')->render($response, 'admin/adduser.html.twig', [
      'successMessage' => $successMessage,
      'errorList' => $errorList
  ]);
});


$app->post('/admin/adduser', function ($request, $response, $args) {

  // Extract values submitted
  $data = $request->getParsedBody();
  $firstName = $data['first_name'];
  $lastName = $data['last_name'];
//   $usertype = $data['user_type'];
  $address = $data['address'];
  $phone = $data['phone'];
  $email = $data['email'];
  $dob = $data['dob'];
  $license = $data['license'];
  $licenseExpiration = $data['license_expiration'];

  // Validate
  $errorList = [];
  if (strlen($firstName) < 2 || strlen($firstName) > 50) {
      $errorList[] = "First name must be 2-50 characters long";
      $firstName = "";
  }
  if (strlen($lastName) < 1 || strlen($lastName) > 50) {
      $errorList[] = "Last name must be 1-50 characters long";
      $lastName = "";
  }
//   if (!in_array($usertype, array('admin', 'customer'))) {
//       $errorList[] = "User type must be either 'admin' or 'customer'";
//       $users = 'customer';
//   }
  if (strlen($address) < 2 || strlen($address) > 100) {
      $errorList[] = "Address must be 2-100 characters long";
      $address = "";
  }
  if (strlen($phone) < 10 || strlen($phone) > 20) {
      $errorList[] = "Phone number must be 10-20 digits long";
      $phone = "";
  }
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errorList[] = "Email address is not valid";
      $email = "";
  }
  if (!strtotime($dob)) {
      $errorList[] = "Date of birth is not valid";
      $dob = "";
  }
  if (strlen($license) < 2 || strlen($license) > 20) {
      $errorList[] = "Driver's license number must be 2-20 characters long";
      $license = "";
  }
  if (!strtotime($licenseExpiration)) {
      $errorList[] = "Driver's license expiration date is not valid";
      $licenseExpiration = "";
  }

  if ($errorList) { // STATE 2: errors
      $valuesList = [
          'first_name' => $firstName,
          'last_name' => $lastName,
        //   'usertype' => $usertype,
          'address' => $address,
          'phone' => $phone,
          'email' => $email,
          'dob' => $dob,
          'license' => $license,
          'license_expiration' => $licenseExpiration
      ];
      return $this->get('view')->render($response, 'admin/adduser.html.twig', ['errorList' => $errorList, 'v' => $valuesList]);
  } else { 
    
    // STATE 3: insert user into database
  

// INSERT USER into database
DB::insert('users', [
  'first_name' => $firstName,
  'last_name' => $lastName,
//   'users' => $users,
  'address' => $address,
  'phone' => $phone,
  'email' => $email,
  'dob' => $dob,
  'license' => $license,
  'license_expiration' => $licenseExpiration
  ]);
  
  $successMessage = "User added successfully!";
  return $this->get('view')->render($response, 'admin/userslist.html.twig', ['successMessage' => $successMessage]);
  $errorMessage = "Error adding user to database: ";
  return $this->get('view')->render($response, 'admin/adduser.html.twig', ['errorMessage' => $errorMessage]);
}
});

