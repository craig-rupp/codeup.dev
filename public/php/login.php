<?php
require_once 'functions.php';
function pageController(){
	session_start();

	if(isset($_SESSION['logged_in_user'])){
		header('Location: authorized.php');
		exit();
	}
	$signIn = 'Sign In';
	//var_dump(inputGet('username'), inputGet('password'));
	 if(inputGet('username') == 'guest' && inputGet('password') == 'password') {
	 	$_SESSION['logged_in_user'] = inputGet('username');//still not quite sure about this line
	 	header('Location: authorized.php');
	 	exit;
	} else{
		$signIn = 'Sign In Failed';
	}
	//var_dump(inputGet('username'), inputGet('password'));
	return ['signIn' => $signIn];
}
extract(pageController());
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="css/style_login.css" media="screen" type="text/css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" />
<style>

</style>
	<h1>
	<title>POST Example</title>
</head>
<body>
	<html lang="en-US">
	<h1><?= $signIn; ?></h1>
	 <div class="container">
		<div id="login">
		<form method="POST" action="login.php">
		<fieldset class="clearfix">
			<p><span class="fontawesome-user"></span><input type="text" name="username" value="Username" onBlur="if(this.value == '') this.value = 'Username'" onFocus="if(this.value == 'Username') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Username" -->
			<p><span class="fontawesome-lock"></span><input type="password" name="password"  value="Password" onBlur="if(this.value == '') this.value = 'Password'" onFocus="if(this.value == 'Password') this.value = ''" required></p> <!-- JS because of IE support; better: placeholder="Password" -->
			<p><input type="submit" value="Sign In"></p>
		 </fieldset>
		 </form>
	</div>
</div>
	   
</body>
</html>


