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


	<tr><th align="left"><h1 class="head">Sign-up</h1></th></tr>
	
	<tr><td><input type="text"  id="sfield1"  placeholder="First name"  onkeyup="nameCheck()" oninput="nameCheck()" required/><br>
	<span><p id="sfirst" style="color:white;font-size:13px;"></p></span></td></tr>
  	
  	<tr><td><input type="text"  id="sfield2"  placeholder="Surname" onkeyup="surnameCheck()" oninput="surnameCheck()" required/><br>
  	<span><p id="s2first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="number"  id="sfield3" placeholder="Mobile number" onkeyup="numberCheck()" oninput="numberCheck()" required/><br>
	<span><p id="s3first" style="color:white;font-size:13px;"></p></span></td></tr>  	
	
	<tr><td><input type="text"  id="sfield4" placeholder="Email-Id" onkeyup="emailCheck()" oninput="emailCheckdynamic()" required/><br>
	<span><p id="s4first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="password" id="sfield5" placeholder="Password" onkeyup="passwordCheck()" oninput="passwordCheck()" required/><br>
	<span><p id="s5first" style="color:white;font-size:13px;"></p></span></td></tr>

	<tr><td><input type="password"  id="sfield6" placeholder="Re-type-Password" onkeyup="reTypeCheck()" oninput="reTypeCheck()" required/><br>
	<span><p id="s6first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="button"  id = "submit" value="sign-up" class="button" style="border:1px solid white;border-radius:5px" onclick="sign_up()" /></td></tr>
	<tr><td><h3 class="rechoose" style="opacity: 0.9" id = "wrong"/></h3></td></tr>



</table>
</div>

<div class="di" id="login">
<table>

	<tr><th><h1 class="head" align="left">Login-In</h1></th></tr>	
	
	<tr><td><input type="text"  id="lfield1" placeholder="Email-Id" required/><br>
	<span><p id="l1first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<tr><td><input type="password"  id="lfield2" placeholder="Password" required/><br>
	<span><p id="l2first" style="color:white;font-size:13px;"></p></span></td></tr>
	
	<td><input type="button"  id = "loginn" value="log-in" class="button" style="border:1px solid white;align:right;border-radius:5px" onclick="log_in()" /></td></tr>
	<tr><td><h3 class="rechoose" style="opacity: 0.9" id ="loginnn"/></h3></td></tr>

</table>
</div>


<script src=valid.js></script>


</body>
</html>