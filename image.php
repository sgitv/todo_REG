<?php
	require_once 'dbconnection.php';
	session_start();
	$id = $_SESSION['user_id'];
	$stmt = $db->prepare("select imagename, image from images where id=:id");
	$stmt->execute([
		'id'=>$id
		]);
	$stmt->bindColumn(1, $imagename, PDO::PARAM_STR, 256);
	$stmt->bindColumn(2, $image, PDO::PARAM_LOB);
	$stmt->fetch(PDO::FETCH_BOUND);
	header("Content-Type: $imagename");
	echo($image);
?>