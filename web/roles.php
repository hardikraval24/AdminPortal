<?php

	include "includes/Role.php";
	include "common/functions.php";

	session_start();

	$action = trim($_REQUEST['action']);

	$app = new Role();

	switch ($action) //register
	{
		case 'browse':			
			exit('here');
			break;

		case 'add':			
			exit('here');
			break;

		default:
			exit("Invalid request.");
			break;
	}

?>