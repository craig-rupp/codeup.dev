<?php

// require_once 'pdo_test.php';
require_once 'db_connect.php';

$query = 'DROP TABLE IF EXISTS national_parks';
$test = $dbc->exec($query);

// var_dump($test);

$query = 'CREATE TABLE national_parks(
	    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	    name VARCHAR(100) NOT NULL,
	    location VARCHAR(100) NOT NULL,
	    date_established DATE,
	    area_in_acres DOUBLE,
	    description TEXT NOT NULL,
	    PRIMARY KEY (id) 

)';
$test = $dbc->exec($query); 
// var_dump($test);

// exec('CREATE TABLE national_parks()