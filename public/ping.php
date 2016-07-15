
<?php

function pageController(){

		if(isset($_GET['theCount'])){
			$data['theCount'] = $_GET['theCount'];
		} else{
			$data['theCount'] = 0;
		}
	
		return $data;
	
}
extract(pageController());
var_dump($_GET);
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Da Counter</title>
	</head>
	<body>
		<h1>Ping</h1>
		<h4>Count : <?= $theCount; ?></h4>
		<a href="pong.php?hit&theCount=<?= $theCount +1 ?>">Hit</a><br><br>
		<a href="pong.php?miss&theCount=<?= $theCount = 0 ?>">Miss</a>
	</body>
	</html>