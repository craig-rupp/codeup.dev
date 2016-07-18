
<?php
function pageController(){

		if(isset($_GET['theCount'])){
			$data['theCount'] = $_GET['theCount'];
		} else{
			$data['theCount'] = 0;
		}
		// $data = "hit";
		return $data;

		//$theCount = isset($_GET['theCount']) ? $_GET['theCount'] : 0;
		//$paddle = isset$_GET['paddle'] ? $_GET['paddle'] : 'miss';
		//if($paddle == 'hit') { $theCount + 1}
	
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
		<h1>Pong</h1>
		<h4>Count : <?= $theCount; ?></h4>
		<a href="ping.php?hit&theCount=<?= $theCount +1 ?>">Hit</a><br><br>
		<a href="ping.php?miss&theCount=<?= $theCount = 0 ?>">Miss</a>
	</body>
	</html>
