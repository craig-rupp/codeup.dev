<?php
function pageController(){
	$signIn = 'Sign In';
	if(!empty($_POST)){
		 if($_POST['username'] == 'guest' && $_POST['password'] == 'password') {
			header('Location: authorized.php');
			exit();
			//send to authorized.php
		} else{
			$signIn = 'Sign In Failed';
		}
		
	}
	return ['signIn' => $signIn];
}
// var_dump($_POST);
extract(pageController());
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" />
<style>

</style>
	<h1>
	<title>POST Example</title>
</head>
<body>
<h1><?= $signIn; ?></h1>
 <div class="container">
	<div id="login">
		<form method="POST">
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


