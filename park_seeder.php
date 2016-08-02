<?php

// require_once 'pdo_test.php';	
require_once 'db_connect.php';
// require_once 'park_migration.php';

$query = 'TRUNCATE national_parks';
$dbc->exec($query);

$parks = [
	['name' => 'Arches', 'location' => 'Utah', 'date_established' => '1971-11-12', 'area_in_acres' => '76518'],
	['name' => 'Big Bend', 'location' => 'Texas', 'date_established' => '1944-06-12', 'area_in_acres' => '801163.21'],
	['name' => 'Carlsbad Caverns', 'location' => 'New Mexico', 'date_established' => '1930-05-14', 'area_in_acres' => '46766.45'],
	['name' => 'Crater Lake', 'location' => 'Oregon', 'date_established' => '1902-05-22', 'area_in_acres' => '120122'],
	['name' => 'Death Valley', 'location' => 'California', 'date_established' => '1994-10-31', 'area_in_acres' => '1101312'],
	['name' => 'Everglades', 'location' => 'Florida', 'date_established' => '1934-05-30', 'area_in_acres' => '110901'],
	['name' => 'Glacier Bay', 'location' => 'Alaska', 'date_established' => '1980-12-02', 'area_in_acres' => '500727'],
	['name' => 'Mammoth Cave', 'location' => 'Kentucky', 'date_established' => '1941-07-01', 'area_in_acres' => '522628'],
	['name' => 'Mount Rainier', 'location' => 'Washington', 'date_established' => '1989-03-02', 'area_in_acres' => '1264259'],
	['name' => 'Yellowstone', 'location' => 'Wyoming, Montana, Idaho', 'date_established' => '1872-03-01', 'area_in_acres' => '3513484']
];
$query = 'INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES';
foreach($parks as $park){
	$query .=  ( "('". $park['name'] . "','" . $park['location'] . "','" . $park['date_established'] . "'," . $park['area_in_acres'] . "),");
}
$query = rtrim($query, ",");
$query .= ";";
var_dump($query);
file_put_contents('query-strng.csv', $query);
$dbc->exec($query);
// var_dump($query);