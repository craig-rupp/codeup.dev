<?php

require_once __DIR__ . '/log.php';
class Auth {
	
	public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';
	public static $username = 'guest';

	public static function attempt($username, $password)
	{	
		$userLogTime = new Log();
		if($username == self::$username && password_verify($password, Auth::$password)){
			//start the session
			$_SESSION['logged_in_user'] = $username;
			$userLogTime->info("User {$username} has logged in");
			return true;
			//redirect to authorized but not necessary
			//header('location: ../public/authorized.php');
			//exit();
		}
		else 
		{
			$userLogTime->error("Incorrect login {$username}");
			return false; 
		}
	}
	public static function check()
	{
		if(isset($_SESSION['logged_in_user'])){
			return true;
		} else {
			return false;
		}
	}	
	public static function user()
	{
		if(isset($_SESSION['logged_in_user'])){
			return self::$username;
		}
	}
	public static function logout()
	{
		//clear $_SESSION username
		session_unset();

		//destroy session
		session_destroy();

		//start a new session?
	}
}