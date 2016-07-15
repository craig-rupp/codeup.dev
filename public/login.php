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
    <title>POST Example</title>
</head>
<body>
<h1><?= $signIn; ?></h1>
    <form method="POST">
        <label>Username</label>
        <input type="text" name="username"><br><br>
        <label>Password</label>
        <input type="password" name="password"><br><br>
        <input type="submit">
    </form>
</body>
</html>

