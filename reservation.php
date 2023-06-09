
<?php
// session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;
use Slim\Routing\RouteCollectorProxy;

require_once 'init.php';
 
// ADMIN CAN SEE LIST OF RESERVATIONS

$app->get('/admin/reservationslist', function ($request, $response, $args) {
    $reservations = DB::query("SELECT * FROM reservations");
    return $this->get('view')->render($response,  'admin/reservationslist.html.twig', ['reservations' => $reservations]);
});






// // USER CAN SEE CALENDAR
// $app->group('/selectdate', function (RouteCollectorProxy $group) {
//     $group->get('', function ($request, $response, $args) {
//         $viewData = [];
//         return $this->get('view')->render($response, 'selectdate.html.twig', $viewData);
//     });
// });

// //////////////////////////////////////////////////////////////////////////////////////////////////

// $app->get('/selectdate', function ($request, $response, $args) {
//     $viewData = [];
//     return $this->get('view')->render($response, 'selectdate.html.twig', $viewData);
// });

// $app->post('/selectdate', function ($request, $response, $args) {
//     $pickupDateTime = $request->getParsedBody()['pickup_date'] . ' ' . $request->getParsedBody()['pickup_time'];
//     $returnDateTime = $request->getParsedBody()['return_date'] . ' ' . $request->getParsedBody()['return_time'];

//     $availableVehicles = DB::query("SELECT id FROM vehicles WHERE %s < return_date AND %s > pickup_date", $pickupDateTime, $returnDateTime);

//     return $this->get('view')->render($response, 'selectvehicle.html.twig', [
//         'availableVehicles' => $availableVehicles,
//         'pickupDateTime' => $pickupDateTime,
//         'returnDateTime' => $returnDateTime
//     ]);
// });
//////////////////////////////////////////////////////////////////////////////////////////////////////

$app->get('/', function ($request, $response, $args) {
    $viewData = [];
    return $this->get('view')->render($response, 'index.html.twig', $viewData);
});

//Todo
$app->post('/', function ($request, $response, $args) {
    $pickupDateTime = $request->getParsedBody()['pickup_date'] . ' ' . $request->getParsedBody()['pickup_time'];
    $returnDateTime = $request->getParsedBody()['return_date'] . ' ' . $request->getParsedBody()['return_time'];

    if (isset($request->getParsedBody()['pickup_time'])) {
        $pickupDateTime = $request->getParsedBody()['pickup_date'] . ' ' . $request->getParsedBody()['pickup_time'];
    } else {
        // handle the case where the pickup_time key is missing
    }
    
    if (isset($request->getParsedBody()['return_time'])) {
        $returnDateTime = $request->getParsedBody()['return_date'] . ' ' . $request->getParsedBody()['return_time'];
    } else {
        // handle the case where the return_time key is missing
    }
    

    $availableVehicles = DB::query("SELECT id FROM vehicles WHERE %s < return_date AND %s > pickup_date", $pickupDateTime, $returnDateTime);

    return $this->get('view')->render($response, 'selectvehicle.html.twig', [
        'availableVehicles' => $availableVehicles,
        'pickupDateTime' => $pickupDateTime,
        'returnDateTime' => $returnDateTime
    ]);
});

// DELETE VEHICLE function //////////////////////////////////////////////////////////////////
$app->get('/admin/deletereservation/{id}', function ($request, $response, $args) {
    $reservations = DB::queryFirstRow("SELECT * FROM reservations WHERE id = %i", $args['id']);
    return $this->get('view')->render($response, 'admin/deletereservation.html.twig', ['reservations' => $reservations]);
  });
  
  $app->post('/admin/deletereservation/{id}', function ($request, $response, $args) {
    $id = $args['id'];
    $result = DB::delete('reservations', "id=%i", $id);
    if ($result) {
      echo '<script>alert("Reservation with id ' . $id . ' was deleted."); window.location.href="/admin/reservationslist";</script>';
    } else {
      echo '<script>alert("Reservation with id ' . $id . ' was not deleted."); window.location.href="/admin/reservationslist";</script>';
    }
  });

  
  

// USER CAN SELECT DATE TO SEE CARS AVAILABLE

// $app->group('/calendar', function (RouteCollectorProxy $group) {
//     $group->post('', function ($request, $response, $args) {
//         $formData = $request->getParsedBody();
//         $departureDate = $formData['departure_date'];
//         $returnDate = $formData['return_date'];
//         // Process the selected dates here...
//         $viewData = [
//             'departureDate' => $departureDate,
//             'returnDate' => $returnDate
//         ];
//         return $this->get('view')->render($response, 'calendar.html.twig', $viewData);
//     });
// });

