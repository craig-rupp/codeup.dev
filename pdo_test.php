<?php 
//define DB HOST
//define DB NAME
//define DB USER
//define DB PASS

// define('DB_HOST', '127.0.0.1');
// define('DB_NAME', 'employees');
// define('DB_USER', 'vagrant');
// define('DB_PASS', 'vagrant');

const DB_HOST = '127.0.0.1';
const DB_NAME = 'employees';
const DB_USER = 'vagrant';
const DB_PASS = 'vagrant';


require_once 'db_connect.php';

// PDO::ERRMODE_EXCEPTION); no exactly sure what this is doing