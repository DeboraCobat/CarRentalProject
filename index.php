<?php
session_start();

//SETUP
require_once 'init.php';

//TABLE ITEMS
require_once 'vehicle.php';
require_once 'user.php';
require_once 'reservation.php';

//SEARCH RESERVATION
require_once 'findmyreservation.php';
require_once 'myreservation.php';
require_once '1bookingprocess.php';

//LOGIN
require_once 'login.php';
require_once 'register.php';
require_once 'resetpassword.php';

require_once 'customerprofile.php';

//CRUD CONTROLLER

//UPDATE
require_once 'userupdatecontroller.php';
require_once 'vehicleupdatecontroller.php';
// require_once 'reservationupdatecontroller.php';



$app->run();
