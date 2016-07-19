<?php
require_once 'functions.php';
function pageController(){

	$theCount = inputHas('theCount') ? inputGet('theCount') : 0;
		return ['theCount' => $theCount];
 }

extract(pageController());
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Da Counter</title>
	</head>
	<body>
		<h1>Pong</h1>
		<h4>Count : <?= $theCount; ?></h4>
		<p><a href="ping.php?count=<?= $theCount + 1; ?>&data=hit">hit</a></p>
  		<p><a href="ping.php?count=<?= $theCount; ?>&data=miss">miss</a></p>
	</body>
	</html>
