<?php

require_once 'dbconnection.php';
session_start();
if($_SESSION['temp']=="")
{
	header('location:body.php');
}
$itemsQuery = $db->prepare("
	SELECT id,name,done,created,date,edit
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
		<div id="welcome"><a href="#" id="userLogName"><span>Welcome!  </span><?php echo $_SESSION['username'];?></a></div>
		<div id ="innertool">
			<a href="logout.php?logout">Log-out</a>
		</div>
		<div id ="innertool1">
			<a href="changeView.php?logout">Change-password</a>
		</div>
	</div>
	<body>
	
		<div class="list">
			<h1 style="color:white">Todo List</h1>

			<?php if(!empty($items)): ?>	
			<ol class="items">
				<?php foreach($items as $item):?>		
					<li>
					
						
					
						<?php if(!$item['edit']):?>
						
							<span class="item<?php echo $item['done']?' done':''?>"><?php echo $item['name']." "."'".$item['date']."'"." added on '".$item['created']."'";?></span>	<!-- display List  -->
					
						<?php endif;?>	
						
						<?php if(!$item['done']):?>
						

							<a href="strikeOutUndoLine.php?as=done&item=<?php echo $item['id'];?>" class="done-button">done</a> 
							<a href="delete.php?item=<?php echo $item['id'];?>" class="done-button">delete</a>     <!-- doneButton  -->
							<a href="edit.php?as=edit&item=<?php echo $item['id'];?>" class="done-button">Edit</a>

						
						<?php endif;?>
						
						<?php if($item['done']): ?>
							

							<a href="strikeOutUndoLine.php?as=notdone&item=<?php echo $item['id'];?>" class="done-button">Undo</a>	<!-- undoButton  -->
							<a href="delete.php?item=<?php echo $item['id'];?>" class="done-button">delete</a>	       <!-- deleteButton  -->
						

						<?php endif;?>
						<?php if($item['edit']): ?>
							<form action = "save.php?item=<?php echo $item['id'];?>" method="post">
							<input type = "text" class = "input" name = "name" style = "width:200px" value = "<?php echo $item['name'];?>"/>
							<input type = "date" class = "input" name = "date" style = "width:200px" value = "<?php echo $item['date'];?>"/>
							<input type = "submit" class = "done-button" value = "SAVE"/>
							</form>
						<?php endif; ?>
					</li>
				<?php endforeach; ?>
			</ol>

			<?php else:?>
				<P>Add your ToDo list below</P>
			<?php endif;?>
			<form class="item-add" action="insert.php" method="post">
				<input type="text" name="name" placeholder="Add here" class="input" autocomplete="off" required>   <!-- input -->
		Set date<input type ="date" name="date" id = "dateField"/>
				<input type="submit" value="Add" class="submit">
				<a href="delete.php?user=<?php echo $_SESSION['user_id'];?>" onclick="return deleteAll()" class="submit" style="margin-left:50px;color:white" >Delete All</a>
			</form>
		</div>
		<script src=valid.js></script>
	</body>
</html>