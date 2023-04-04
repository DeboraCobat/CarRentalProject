<?php

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

require_once 'init.php';


// STEP 1: Displaying screens

// editing a reservation
$app->get('/admin/editreservation/{id}', function ($request, $response, $args) {
    $reservationId = $args['id'];

    // Retrieve the reservation 
    $reservations = DB::query("SELECT * FROM reservations WHERE id = %i", $reservationId);
    $reservation = reset($reservations);

    // Render the edit reservation form with the selected reservation
    return $this->get('view')->render($response, 'admin/editreservation.html.twig', ['reservation' => $reservation]);
});


// reservation class
class Reservation
{
    public $id;
    public $customer_id;
    public $vehicle_id;
    public $start_date;
    public $end_date;
    public $rental_price;
    public $insurance_price;
    public $taxes;
    public $final_total;
    public $notes;
    public $payment_confirmation;


    // Constructor
    public function __construct($id, $customer_id, $vehicle_id, $start_date, $end_date, $rental_price, $insurance_price, $taxes, $final_total, $notes, $payment_confirmation)
    {
        $this->id = $id;
        $this->customer_id = $customer_id;
        $this->vehicle_id = $vehicle_id;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
        $this->rental_price = $rental_price;
        $this->insurance_price = $insurance_price;
        $this->taxes = $taxes;
        $this->final_total = $final_total;
        $this->notes = $notes;
        $this->payment_confirmation = $payment_confirmation;
    }

    // Save method
public function save()
{
    $query = "UPDATE reservations SET customer_id = %i, vehicle_id = %i, start_date = %s, end_date = %s, rental_price = %s, insurance_price = %s, taxes = %s, final_total = %s, notes = %s, payment_confirmation = %s WHERE id = %i";

    $result = DB::query($query,
        $this->customer_id,
        $this->vehicle_id,
        $this->start_date,
        $this->end_date,
        sprintf("%.2f", $this->rental_price),
        sprintf("%.2f", $this->insurance_price),
        sprintf("%.2f", $this->taxes),
        sprintf("%.2f", $this->final_total),
        $this->notes,
        $this->payment_confirmation,
        $this->id
    );

    return $result;
}

}

// Define the route for updating a reservation
$app->post('/admin/editreservation/{id}', function ($request, $response, $args) {
    $reservationId = $args['id'];

    // Retrieve the reservation to be edited from the database
$reservations = DB::query("SELECT * FROM reservations WHERE id = %i", $reservationId);
$row = reset($reservations);
$reservation = new Reservation(
$row['id'],
$row['customer_id'],
$row['vehicle_id'],
$row['start_date'],
$row['end_date'],
$row['rental_price'],
$row['insurance_price'],
$row['taxes'],
$row['final_total'],
$row['notes'],
$row['payment_confirmation']
);

// Update the reservation with the submitted data
$data = $request->getParsedBody();
$reservation->customer_id = $data['customer_id'];
$reservation->vehicle_id = $data['vehicle_id'];
$reservation->start_date = $data['start_date'];
$reservation->end_date = $data['end_date'];
$reservation->rental_price = $data['rental_price'];
$reservation->insurance_price = $data['insurance_price'];
$reservation->taxes = $data['taxes'];
$reservation->final_total = $data['final_total'];
$reservation->notes = $data['notes'];
$reservation->payment_confirmation = $data['payment_confirmation'];
$reservation->save();

// Save the updated reservation to the database
$result = $reservation->save();

// Return a response indicating whether the update was successful
if ($result) {
return $response->withStatus(200)->write('Reservation updated successfully');
} else {
return $response->withStatus(500)->write('Failed to update Reservation');
}

// // Redirect back to the reservation list page
// return $response->withRedirect('/admin/reservationslist');
});
