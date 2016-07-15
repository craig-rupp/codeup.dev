
<?php
function pageController(){

		if(isset($_GET['theCount'])){
			$data['theCount'] = $_GET['theCount'];
		} else{
			$data['theCount'] = 0;
		}
		// var_dump($data);
		return $data;
		//<form method="get" action="document name"
		//<button type ="submit" name="counter" value="<?= $counter +1 (php close)">Up</button>
	
}
extract(pageController());
?>
<!DOCTYPE html>
	<html>
	<head>
		<title>Da Counter</title>
	</head>
	<body>
		<h1>Counter</h1>
		<h4>Count : <?= $theCount; ?></h4>
		<a href="?theCount=<?= $theCount +1 ?>">Up</a><br><br>
		<a href="?theCount=<?= $theCount -1 ?>">Down</a>
	</body>
	</html>

