<?php

require_once 'dbconnection.php';
if(isset($_GET['as'], $_GET['item'])){
	$as   = $_GET['as'];
	$item = $_GET['item'];
	switch($as){
		case 'edit':
		$doneQuery = $db->prepare("
			UPDATE items
			SET edit = 1
			WHERE id = :item
		");											
		$doneQuery->execute([
			'item'=>$item
		]);
		break;
		case 'save':
			$doneQuery = $db->prepare("
			UPDATE items
			SET edit = 0
			WHERE id = :item
		");											
		$doneQuery->execute([
			'item'=>$item
		]);
		break;
	}
}
header('Location: todoHomeScreen.php');
?>