<?php
	error_reporting(0);
	session_start();
	if($_SESSION['temp'] != "")
	{
		header('location:todoHomeScreen.php');
	}

?>

<!DOCTYPE html>
<html>
<head><title>Registration</title><link type="text/css" rel="stylesheet" href="styles.css"></head>
<body>


<div class="di" id="signup">
<table>

<form action="signUplogIn.php" method="post" onsubmit="return check()">
	<tr><th align="left"><h1 class="head">Sign-up</h1></th></tr>
	
	<tr><td><input type="text" name="firstname" id="sfield1"  placeholder="First name" onkeyup="nameCheck()" required/><br>
	<span><p id="sfirst" style="color:white;font-size:13px;"></p></span></td></tr>
  	
  	<tr><td><input type="text" name="surname" id="sfield2"  placeholder="Surname" onkeyup="surnameCheck()" required/><br>
  	<span><p id="s2first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="number" name="number" id="sfield3" placeholder="Mobile number" onkeyup="numberCheck()" required/><br>
	<span><p id="s3first" style="color:white;font-size:13px;"></p></span></td></tr>  	
	
	<tr><td><input type="text" name="email" id="sfield4" placeholder="Email-Id" onkeyup="emailCheck()" required/><br>
	<span><p id="s4first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="password" name="password" id="sfield5" placeholder="Password" onkeyup="passwordCheck()" required/><br>
	<span><p id="s5first" style="color:white;font-size:13px;"></p></span></td></tr>

	<tr><td><input type="password" name="password1" id="sfield6" placeholder="Re-type-Password" onkeyup="reTypeCheck()" required/><br>
	<span><p id="s6first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="submit" name="submit" value="sign-up" class="button" style="border:1px solid white;border-radius:5px"/></td>
</form>

</table>
</div>

<div class="di" id="login">
<table>

<form action="signUplogIn.php" method="post" onsubmit="return checklog()"> 
	<tr><th><h1 class="head" align="left">Login-In</h1></th></tr>	
	
	<tr><td><input type="text" name="email" id="lfield1" placeholder="Email-Id" onkeyup="emailLCheck()" required/><br>
	<span><p id="l1first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="password" name="password" id="lfield2" placeholder="Password" onkeyup="passwordLCheck()" required/><br>
	<span><p id="l2first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<td><input type="submit" name="login" value="login" class="button" style="border:1px solid white;align:right;border-radius:5px" required/></td></tr>
</form>

</table>
</div>


<script src=valid.js></script>


</body>
</html>