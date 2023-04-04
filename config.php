<?php


require_once 'init.php';
require_once "stripe-php-master/init.php";

// Replace with your API keys
$stripedetails = array(
  "secret_key"      => "sk_test_51MsXcLJzhRIY3i5LbTo8hF8fpepQB7rZhqMPFbrYUcvL0neLjswAcseaEFaUjAkAHUes8aowTOn3ExUEEaZ3fpiQ00swXyqAGZ",
  "publishable_key" => "pk_test_51MsXcLJzhRIY3i5LeaGpgIQ9cHj8h0mwvZazt0JSNCk88nZyabvuDxiP2ju6wVisTEylFUPmS11X6ZuAitmtvDwZ00zwYYHn5W"
);

// Set the API key for use in your app
\Stripe\Stripe::setApiKey($stripedetails['secret_key']);

?>