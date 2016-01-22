<?php
session_start();
if($_SESSION['temp'] == "")
{
	header('location:body.php');
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>To do</title></title>
		<link rel="stylesheet" href="theams.css">
		<link type="text/css" rel="stylesheet" href="styles.css">
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
		<div class="di" id="signup" style="margin-top=-100px">
<table>

<form action="checkingNewPassword.php" method="post" onsubmit="return check()">
	<tr><th align="left"><h1 class="head">Set-New-Password</h1></th></tr>
	  	
	<tr><td><input type="text" name="email" id="lfield1" placeholder="Email-Id" onkeyup="emailLCheck()" required/><br>
	<span><p id="l1first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="password" name="password" id="lfield2" placeholder="Password" onkeyup="passwordLCheck()" required/><br>
	<span><p id="l2first" style="color:white;font-size:13px;"></p></span></td></tr>

	<tr><td><input type="password" name="new" id="sfield5" placeholder="New-Password" onkeyup="passwordCheck()" required/><br>
	<span><p id="s5first" style="color:white;font-size:13px;"></p></span></td></tr>

	<tr><td><input type="password" name="renew" id="sfield6" placeholder="Re-type-New-Password" onkeyup="reTypeCheck()" required/><br>
	<span><p id="s6first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="submit" name="submit" value="Change" class="button" style="border:1px solid white;border-radius:5px"/></td></tr>
</form>

</table>
</div>
<script src=valid.js></script>
	</body>
</html>