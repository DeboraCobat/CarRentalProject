<?php
//session_start();

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use DI\Container;
use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Psr\Http\Message\UploadedFileInterface;
use Slim\Flash\Messages;



require_once 'init.php';
include("config.php");



$token = $_POST["stripeToken"];
$contact_name = $_POST["c_name"];
$token_card_type = $_POST["stripeTokenType"];
$phone           = $_POST["phone"];
$email           = $_POST["stripeEmail"];
$address         = $_POST["address"];
$amount          = $_POST["amount"]; 
$desc            = $_POST["product_name"];
$charge = \Stripe\Charge::create([
  "amount" => str_replace(",","",$amount) * 100,
  "currency" => 'inr',
  "description"=>$desc,
  "source"=> $token,
]);

if($charge){
  DB::update('reservations', ['payment_confirmation' => 1], 'id=%s', $reservation_id);
  header("Location:success.php?amount=$amount");
} 

?>