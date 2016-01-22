<?php
	require_once 'dbconnection.php';
	$d = $_GET['item'];
	$delQuery = $db->prepare("
		DELETE FROM items WHERE id = :id  
	");										//Delete the row from database table
	$delQuery->execute([
		'id'=>$d
	]);
	header('location: todoHomeScreen.php');
?>