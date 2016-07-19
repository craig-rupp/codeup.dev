<?php
function pageController(){
session_start();
// var_dump($_SESSION);

if(!isset($_SESSION['logged_in_user'])){
    header('Location: login.php');
    exit();
} else{
    return $_SESSION['username'];
}
    
}
$name = pageController();
?>
<!DOCTYPE html>
<html>
<head>
<style>
	body{
		background-color: white;
	}
	#KP{

	}

</style>
    <title>POST Example</title>
</head>
<body>
	<h1 id="KP">AUTHORIZED</h1>
    <p>Hello <?= $name; ?>!</p>
    <a href="logout.php">LogOut</a>
</body>
</html>

