
<?php

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
    return $this->get('view')->render($response,  'admin/reservationslist.html.twig');
});


// USER CAN SEE CALENDAR
$app->group('/selectdate', function (RouteCollectorProxy $group) {
    $group->get('', function ($request, $response, $args) {
        $viewData = [];
        return $this->get('view')->render($response, 'selectdate.html.twig', $viewData);
    });
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

