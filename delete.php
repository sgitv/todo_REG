<?php
	require_once 'dbconnection.php';
	$d = $_GET['item'];
	$delQuery = $db->prepare("
		DELETE FROM items WHERE id = :id  
	");										//Delete the row from database table
	$delQuery->execute([
		'id'=>$d
	]);
	$t = $_GET['user'];
	$delQueryall = $db->prepare("
		DELETE FROM items WHERE user = :id  
	");										//Delete all
	$delQueryall->execute([
		'id'=>$t
	]);
	header('location: todoHomeScreen.php');
?>