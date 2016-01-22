<?php
session_start();
if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['temp']);
	unset($_SESSION['user_id']);
	unset($_SESSION['password']);
	header('location: body.php');
}
?>