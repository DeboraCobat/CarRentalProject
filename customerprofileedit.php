<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';


$app->get('/customerprofileedit', function (Request $request, Response $response) {
    return $this->get('view')->render($response, 'customerprofileedit.html.twig');
});

//     // Render the edit profile page with the user's data
//     $userId = $_SESSION['user']['id'];
//     return $this->get('view')->render($response, 'customerprofileedit.html.twig', [
//         'userId' => $userId
//     ]);

// $app->post('/customerprofileedit', function ($request, $response, $args) use ($authMiddleware) {
//     // Get the user's session data
//     $userSession = $this->session->get('user');

//     if ($userSession == null) {
//         // Handle null user session data
//         // For example, redirect the user to a login page
//         return $response->withRedirect('/login');
//     }

//     $formData = $request->getParsedBody();

//     // Update the user's session data with the new form data
//     $userSession['first_name'] = $formData['first_name'];
//     $userSession['last_name'] = $formData['last_name'];
//     $userSession['email'] = $formData['email'];
//     $userSession['phone'] = $formData['phone'];
//     $userSession['address'] = $formData['address'];
//     $userSession['dob'] = $formData['dob'];
//     // $userSession['license'] = $formData['license'];
//     // $userSession['license_expiration'] = $formData['license_expiration'];

//     // Save the updated session data
//     $this->session->set('user', $userSession);

//     // Redirect the user back to the profile page
//     return $response->withRedirect('/customerprofile');
    
// })