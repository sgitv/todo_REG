<?php

require_once 'dbconnection.php';
session_start();
if($_SESSION['temp']=="")
{
	header('location:body.php');
}
$itemsQuery = $db->prepare("
	SELECT id,name,done
	FROM items
	WHERE user = :user
	");

$itemsQuery->execute([
	'user'=>$_SESSION['user_id']
	]);

$items = $itemsQuery->rowCount()? $itemsQuery : [];


?>

<!DOCTYPE html>
<html>
	<head>
		<title>To do</title></title>
		<link rel="stylesheet" href="theams.css">
	</head>
	<div id="toolbar">
		<div id ="innertool">
			<a href="logout.php?logout">Log-out</a>
		</div>
		<div id ="innertool1">
			<a href="changeView.php?logout">Change-password</a>
		</div>
	</div>
	<body>
	<div ><a href="#" id="userLogName"><span id = "welcome">Welcome!  </span><?php echo $_SESSION['username'];?></a></div>
		<div class="list">
			<h1 style="color:white">Todo List</h1>

			<?php if(!empty($items)): ?>	
			<ol class="items">
				<?php foreach($items as $item):?>		
					<li>
						<span class="item<?php echo $item['done']?' done':''?>"><?php echo $item['name'];?></span>	<!-- display List  -->
						<?php if(!$item['done']):?>
						<a href="strikeOutUndoLine.php?as=done&item=<?php echo $item['id'];?>" class="done-button">done</a>      <!-- doneButton  -->
						<?php endif;?>
						<?php if($item['done']): ?>
							<a href="strikeOutUndoLine.php?as=notdone&item=<?php echo $item['id'];?>" class="done-button">Undo</a>	<!-- undoButton  -->
							<a href="delete.php?item=<?php echo $item['id'];?>" class="done-button">delete</a>	       <!-- deleteButton  -->
						<?php endif;?>
					</li>
				<?php endforeach; ?>
			</ol>
			<?php else:?>
				<P>Add your ToDo list below</P>
			<?php endif;?>
			<form class="item-add" action="insert.php" method="post">
				<input type="text" name="name" placeholder="Add here" class="input" autocomplete="off" required>   <!-- input -->
				<input type="submit" value="Add" class="submit">
			</form>
		</div>
	</body>
</html>