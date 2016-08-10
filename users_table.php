<?php

require_once 'db_connect_model.php';

$query = 'DROP TABLE IF EXISTS users';
$test = $dbc->exec($query);
// var_dump($test);
$query = 'CREATE TABLE users(
	    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	    name VARCHAR(100) NOT NULL,
	    email VARCHAR(100) NOT NULL,
	    password VARCHAR(100) NOT NULL,
	    PRIMARY KEY (id) 
)';
$test = $dbc->exec($query); 