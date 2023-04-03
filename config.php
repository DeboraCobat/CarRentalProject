<?php


require_once 'init.php';

// Replace with your API keys
$stripe = array(
  "secret_key"      => "YOUR-SECRET-API-KEY",
  "publishable_key" => "YOUR-PUBLISHABLE-API-KEY"
);

// Set the API key for use in your app
\Stripe\Stripe::setApiKey($stripe['secret_key']);

?>