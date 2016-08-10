<?php 

require_once 'user.php';

$yaboi = new User();

$yaboi->name = 'LaMichael';
$yaboi->email = 'LaMichael@stillhere.com';
$yaboi->password = 'Imamazing';

$yaboi->save();

echo 'Which row is this, hopefully the last ' . $yaboi->id . PHP_EOL;

var_dump($yaboi);