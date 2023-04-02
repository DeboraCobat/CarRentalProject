<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;
use Slim\Flash\Messages;
use Respect\Validation\Validator as Validator;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;


require_once 'init.php';

// Display register page
$app->get('/register', function ($request, $response, $args) {
      $successMessage = '';
      $errorList = [];
      return $this->get('view')->render($response, 'register.html.twig', [
          'successMessage' => $successMessage,
          'errorList' => $errorList
      ]);
    });

// adding the user to users list
$app->post('/register', function (Request $request, Response $response, $args) {
  // Extract values submitted
  $data = $request->getParsedBody();
  $firstName = $data['first_name'];
  $lastName = $data['last_name'];
  $address = $data['address'];
  $phone = $data['phone'];
  $email = $data['email'];
  $dob = $data['dob'];
//   $license = $data['license'];
//   $licenseExpiration = $data['license_expiration'];
  $password = $data['password'];

  // Encrypt password with pepper
  $passwordPepper = $GLOBALS['passwordPepper'];
  $pwdPeppered = hash_hmac("sha256", $password, $passwordPepper);
  $pwdHashed = password_hash($pwdPeppered, PASSWORD_DEFAULT);

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
//   if (strlen($license) < 2 || strlen($license) > 20) {
//       $errorList[] = "Driver's license number must be 2-20 characters long";
//       $license = "";
//   }
//   if (!strtotime($licenseExpiration)) {
//       $errorList[] = "Driver's license expiration date is not valid";
//       $licenseExpiration = "";
//   }

  if ($errorList) { // STATE 2: errors
      $valuesList = [
          'first_name' => $firstName,
          'last_name' => $lastName,
          'address' => $address,
          'phone' => $phone,
          'email' => $email,
          'dob' => $dob,
        //   'license' => $license,
        //   'license_expiration' => $licenseExpiration
      ];
      return $this->get('view')->render($response, 'register.html.twig', ['errorList' => $errorList, 'v' => $valuesList]);
  } else { // STATE 3: success
     // Insert user into database
     $result = DB::insert('users', [
      'first_name' => $firstName,
      'last_name' => $lastName,
      'address' => $address,
      'phone' => $phone,
      'email' => $email,
      'dob' => $dob,
    //   'license' => $license,
    //   'license_expiration' => $licenseExpiration,
      'password' => $password,
      'created_at' => date('Y-m-d H:i:s')
    ]);
      }
    
    if ($result) { // STATE 4: success
      $successMessage = "User added successfully!";
      return $this->get('view')->render($response, 'register.html.twig', ['successMessage' => $successMessage]);
    } else { // STATE 5: error
      $errorMessage = "Error adding user to database: " . DB::error();
      return $this->get('view')->render($response, 'register.html.twig', ['errorMessage' => $errorMessage]);
    }
  });
    
    
           

         


// use Psr\Http\Message\ResponseInterface as Response;
// use Psr\Http\Message\ServerRequestInterface as Request;
// use Slim\Factory\AppFactory;
// use DI\Container;
// use Slim\Views\Twig;
// use Slim\Views\TwigMiddleware;
// use Psr\Http\Message\UploadedFileInterface;
// use Slim\Routing\RouteCollectorProxy;

// require_once 'init.php';

// // Display register page
// $app->get('/register', function ($request, $response, $args) {
//     $successMessage = '';
//     $errorList = [];
//     return $this->get('view')->render($response, 'register.html.twig', [
//         'successMessage' => $successMessage,
//         'errorList' => $errorList
//     ]);
//   });
  
//   // adding the user to users list
//   $app->post('/register', function ($request, $response, $args) {
  
//     // Extract values submitted
//     $data = $request->getParsedBody();
//     $firstName = $data['first_name'];
//     $lastName = $data['last_name'];
//   //   $usertype = $data['user_type'];
//     $address = $data['address'];
//     $phone = $data['phone'];
//     $email = $data['email'];
//     $dob = $data['dob'];
//     $license = $data['license'];
//     $licenseExpiration = $data['license_expiration'];
  
//     // Validate
//     $errorList = [];
//     if (strlen($firstName) < 2 || strlen($firstName) > 50) {
//         $errorList[] = "First name must be 2-50 characters long";
//         $firstName = "";
//     }
//     if (strlen($lastName) < 1 || strlen($lastName) > 50) {
//         $errorList[] = "Last name must be 1-50 characters long";
//         $lastName = "";
//     }
//   //   if (!in_array($usertype, array('admin', 'customer'))) {
//   //       $errorList[] = "User type must be either 'admin' or 'customer'";
//   //       $users = 'customer';
//   //   }
//     if (strlen($address) < 2 || strlen($address) > 100) {
//         $errorList[] = "Address must be 2-100 characters long";
//         $address = "";
//     }
//     if (strlen($phone) < 10 || strlen($phone) > 20) {
//         $errorList[] = "Phone number must be 10-20 digits long";
//         $phone = "";
//     }
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $errorList[] = "Email address is not valid";
//         $email = "";
//     }
//     if (!strtotime($dob)) {
//         $errorList[] = "Date of birth is not valid";
//         $dob = "";
//     }
//     if (strlen($license) < 2 || strlen($license) > 20) {
//         $errorList[] = "Driver's license number must be 2-20 characters long";
//         $license = "";
//     }
//     if (!strtotime($licenseExpiration)) {
//         $errorList[] = "Driver's license expiration date is not valid";
//         $licenseExpiration = "";
//     }
  
//     if ($errorList) { // STATE 2: errors
//         $valuesList = [
//             'first_name' => $firstName,
//             'last_name' => $lastName,
//           //   'usertype' => $usertype,
//             'address' => $address,
//             'phone' => $phone,
//             'email' => $email,
//             'dob' => $dob,
//             'license' => $license,
//             'license_expiration' => $licenseExpiration
//         ];
//         return $this->get('view')->render($response, 'register.html.twig', ['errorList' => $errorList, 'v' => $valuesList]);
//     } else { 
      
//       // STATE 3: insert user into database
    
  
//   // INSERT USER into database
  
//   DB::insert('users', [
//     'first_name' => $firstName,
//     'last_name' => $lastName,
//   //   'users' => $users,
//     'address' => $address,
//     'phone' => $phone,
//     'email' => $email,
//     'dob' => $dob,
//     'license' => $license,
//     'license_expiration' => $licenseExpiration
//     ]);

//     ///// global $passwordPepper; ENCRYPETDPASSWORD  
// // $pwdPeppered = hash hmac("sha256", $pass1, $passwordPepper);
// // SpwdHashed = password hash($pwdPeppered, PASSWORD DEFAULT); // PASSWORD @var string SpwdHashed
// // DB:: insert('users', ['name' -> $name,
// // 'email' -> $email, 'password' -> $pwdHashed]
// // 'imageData' =› $photoData,
// // 'imageMimeType =› $mimeType]);
// // return $this-›view-›render
    
//     $successMessage = "User added successfully!";
//     return $this->get('view')->render($response, 'register.html.twig', ['successMessage' => $successMessage]);
//     $errorMessage = "Error adding user to database: ";
//     return $this->get('view')->render($response, 'register.html.twig', ['errorMessage' => $errorMessage]);
//   }
//   });
  
  