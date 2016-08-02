<?php

// $dbc = new PDO('mysql:host=127.0.0.1;dbname=employees', 'vagrant', 'vagrant');

// // Tell PDO to throw exceptions on error
// $dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n"; 

//FIRST INITIAL CONNECT ABOVE


$dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASS);

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS) . "\n";


