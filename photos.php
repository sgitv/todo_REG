<?php
require_once 'dbconnection.php';
session_start();
if($_SESSION['temp']=="")
{
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>To do</title></title>
	<link rel="stylesheet" href="theams.css">
</head>	
<body>
<div id="toolbar">
	<div id="welcome"><image src = "image.php" width="50" height = "50" id="image"><p id="userLogName"><span></span><?php echo $_SESSION['username'];?></p></div>			
	<div id ="innertool">
		<a href="logout.php?logout">Log-out</a>
	</div>
	<div id ="innertool1">
		<a href="changeView.php?logout">Change-password</a>
	</div>
</div>
<div id="imagechoose">
	
	<form action = "picsInsert.php" method="post" enctype="multipart/form-data">			
		<input type="file" placeholder="profile pic" name="file" id="imagechoose"/>
		<input type="submit" value="upload profile picture" style="color:black"/>			
	</form>		
</div>
	<div id ="innertool">
		<a href="todoHomeScreen.php?logout">Back</a>
	</div>

	<?php
	
	$id = $_SESSION['user_id'];
	$stmt = $db->prepare("select imagename, image from images where id=:id");
	$stmt->execute([
		'id'=>$id
		]);
	
	$stmt->bindColumn(1, $imagename, PDO::PARAM_STR, 256);
	$stmt->bindColumn(2, $image, PDO::PARAM_LOB);
	$stmt->fetch(PDO::FETCH_BOUND);	
	$items = $stmt->rowCount()? $stmt : [];

foreach ($items as $k) {
	
	echo '<img src="data:image/jpg;base64,' .  base64_encode($image)  . '" height="100" width="100"/>';
}
	
?>
</body>
</html>