<?php
	require_once 'dbconnection.php';
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
	
	
		$stmt = $db->prepare("SELECT * FROM users WHERE email=:email_id");
		$stmt->execute(array(":email_id"=>$email));
		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
		if(($userRow['email'] === $email)&&($userRow['password'] === $password))
		{	 
			$doneQuery = $db->prepare("
			UPDATE users 
			SET password = :newPassword
			WHERE email = :emailid" );											//strike out
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