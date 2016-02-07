<?php
		require_once 'dbconnection.php';
		session_start();
		$id = $_SESSION['user_id']; 
		$n = 1;

		
		$stmt = $db->prepare("insert into images (id, imagename, image,edit) values (?, ?, ?,?)");

		$fp = @fopen($_FILES['file']['tmp_name'], 'rb');

		$stmt->bindParam(1, $id);
		$stmt->bindParam(2, $_FILES['file']['type']);
		$stmt->bindParam(3, $fp, PDO::PARAM_LOB);
		$stmt->bindParam(4,$n);

		$db->beginTransaction();
		$stmt->execute();



		$db->commit();

		header("location:photos.php");

?>