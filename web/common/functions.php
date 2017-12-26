<?php
	/**
	* beautify an array
	* @return array
	* @param $var array
	*/
	function pr($var)
	{
		echo "<pre>";
		print_r($var);
	}

	/**
	* This function will calculate the simple interest.
	* @return int - calculated interest
	* @param $p int
	* @param $r int
	* @param $t int
	*/
	function simpleInterest($p,$r,$t=5)
	{
		return $p * $r * $t / 100;
	}

	/**
	* Redirect to login page, if not logged in.
	* @return boolean	
	*/
	function auth()
	{
		if(!isset($_SESSION['user']))
		{
		   header("Location:login.php");exit;
		}
	}

	/**
	* Redirect to home page, if logged in.
	* @return boolean	
	*/
	function checkLogin()
	{
		if(isset($_SESSION['user']))
		{
		   header("Location:index.php");
		}
	}
?>