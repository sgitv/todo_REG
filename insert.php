<?php

require_once 'dbconnection.php';
session_start();

if(isset($_POST['name'])){
	$name = trim($_POST['name']);
	$date = $_POST['date'];

	if(!empty($name)){
		$addedQuery = $db->prepare("
			INSERT INTO items(name,user,done,created,date)
			VALUES(:name, :user , 0, NOW(),:date)
		");														//inserting into table

		$addedQuery->execute([
			'name'=>$name,
			'user'=>$_SESSION['user_id'],
			'date'=>$date
		]);
	}
}
header('location: todoHomeScreen.php');
?>