<?php
	require_once 'dbconnection.php';
	require_once 'Classes.php';
	session_start();
	if($_SESSION['temp']!="")
	{
		header('location:body.php');
	}
	$email = $_POST['email'];
	$password = $_POST['password'];
	$new = $_POST['new'];
	
	if($email == $_SESSION['temp']&&$password == $_SESSION['password'])
	{
		$change = new Compare($email,$password);
		if($change->check())
		{	 
			$doneQuery = $db->prepare("
			UPDATE users 
			SET password = :newPassword
			WHERE email = :emailid" );											
			$doneQuery->execute([":newPassword"=>$new,
							":emailid"=>$email]);
			$_SESSION['temp']="";
			header('location:body.php');
		}
		else
		{
			header('location:incorrectEmail&Password1.php');
		}
	}
	else
	{
		header('location:incorrectEmail&Password1.php');
	}
?>