<?php

	include "includes/MyApp.php";
	include "common/functions.php";

	session_start();

	$action = trim($_REQUEST['action']);

	$app = new MyApp();

	switch ($action) //register
	{
		case 'register':			
			$query = "INSERT INTO `users` (name, email, password, phone ) VALUES ('".addslashes($_REQUEST['name'])."', '".addslashes($_REQUEST['email'])."', '".addslashes(md5($_REQUEST['password']))."', ".$_REQUEST['phone'].")";			
			$result = $app->register($query);
			if($result)
			{
				$_SESSION['success_msg'] = "Registration successfull, please login.";
				header("Location:login.php");
			}
			break;

		case 'login':
			
			$query = "SELECT * FROM `users` WHERE email='".addslashes($_REQUEST['email'])."' AND password='".addslashes(md5($_REQUEST['password']))."'";
			
			$result = $app->login($query);

			$count = mysqli_num_rows($result);

			if($count == 1)
			{
				$_SESSION['user'] = mysqli_fetch_assoc($result);				
				header("Location:index.php");
			}
			else
			{
				$_SESSION['error_msg'] = "Invalid login, please try again.";
				header("Location:login.php");
			}			
			break;
		
		default:
			exit("Invalid request.");
			break;
	}

?>