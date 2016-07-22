<?php
require_once '../../Input.php';
function pageController(){

	$theCount = Input::get('theCount', 0);// ? Input::has('theCount') : 0;
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
		<p><a href="ping.php?theCount=<?= $theCount + 1 ?>">hit</a></p>
  		<p><a href="ping.php?theCount=<?= $theCount - $theCount ?>">miss</a></p>
	</body>
	</html>
