<?php 
	require_once 'dbconnection.php';
	session_start();
		$email = $_POST['email'];
		$password = $_POST['password'];
		$stmt = $db->prepare("SELECT * FROM users WHERE email=:email_id");
		$stmt->execute(array(":email_id"=>$email));
		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
		if(($userRow['email'] === $email)&&($userRow['password'] === $password))
		{
			$_SESSION['temp'] = $email;
			$_SESSION['user_id'] = $userRow['id'];
			$_SESSION['username'] = $userRow['username'];
			$_SESSION['password'] = $userRow['password'];
			$_SESSION['phone'] = $userRow['pnumber']; 
			echo "true";
		}
		else
		{
			echo "false";
		}
?>