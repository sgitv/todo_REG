function check()
{
	var username = document.getElementById("sfield1").value;
	var surname = document.getElementById("sfield2").value;
	var number = document.getElementById("sfield3").value;
	var email = document.getElementById("sfield4").value;
	var password = document.getElementById("sfield5").value;
	var password1 = document.getElementById("sfield6").value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	if(username.length < 3)
	{
		alert("your username is too shot!");
		return false;
	}
	else if(surname.length < 1)
	{
		alert("surname too short");
		return false;
	}
	else if(number.length !== 10)
	{
		alert("number shoulde be 10 digits");	
		return false;
	}
	else if(!(email.match(mailformat)))
	{
		alert("invalid email");
		return false;
	}
	else if(password.length < 8)
	{
		alert("password too short!");
		return false;
	}
	else if(password1!=password)
	{
		alert("password! is not matching");
		return false;
	}

}
function checklog()
{
	var email = document.getElementById("lfield1").value;
	var password = document.getElementById("lfield2").value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
	
		if(!(email.match(mailformat)))
		{
			alert("invalid email");
			return false;
		}
		else if(password.length < 8)
		{
			alert("password too short!");
			return false;
		}

}
function nameCheck()
{
	var input = document.getElementById("sfield1");
	if(input.value.length < 3)
	{
		document.getElementById('sfirst').innerHTML = "Too Short"+" &#10008";
		document.getElementById('sfirst').style.color = "red";
	}
	else
	{
		document.getElementById('sfirst').innerHTML = "Ok"+" &#10004";
		document.getElementById('sfirst').style.color = "lightgreen";

	}

}
function surnameCheck()
{
	var input = document.getElementById("sfield2");
	if(input.value.length < 1)
	{
		document.getElementById('s2first').innerHTML = "Too Short"+" &#10008";
		document.getElementById('s2first').style.color = "red";
	}
	else
	{
		document.getElementById('s2first').innerHTML = "Ok"+" &#10004";
		document.getElementById('s2first').style.color = "lightgreen";

	}

}
function numberCheck()
{
	var input = document.getElementById("sfield3");
	if(input.value.length !== 10)
	{
		document.getElementById('s3first').innerHTML = "Invalid number"+" &#10008";
		document.getElementById('s3first').style.color = "red";
	}
	else
	{
		document.getElementById('s3first').innerHTML = "Valid number"+" &#10004";
		document.getElementById('s3first').style.color = "lightgreen";

	}

}
function emailCheck()
{
	var input = document.getElementById("sfield4");
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(!(input.value.match(mailformat)))  
	{  
		document.getElementById('s4first').innerHTML = "In-Valid email"+" &#10008";
		document.getElementById('s4first').style.color = "red";
	}
	else
	{
		document.getElementById('s4first').innerHTML = "Valid email"+" &#10004";
		document.getElementById('s4first').style.color = "lightgreen";

	}

}
function passwordCheck()
{
	var input = document.getElementById("sfield5");
	if(input.value.length < 8)
	{
		document.getElementById('s5first').innerHTML = "Password is Too Short"+" &#10008";
		document.getElementById('s5first').style.color = "red";
	}
	else
	{
		document.getElementById('s5first').innerHTML = "Ok"+" &#10004";
		document.getElementById('s5first').style.color = "lightgreen";

	}

}
function reTypeCheck()
{
	var input = document.getElementById("sfield6");
	var input1 = document.getElementById("sfield5");
	if(!(input.value === input1.value))
	{
		document.getElementById('s6first').innerHTML = "Not-Matching"+" &#10008";
		document.getElementById('s6first').style.color = "red";
	}
	else
	{
		document.getElementById('s6first').innerHTML = "Matched"+" &#10004";
		document.getElementById('s6first').style.color = "lightgreen";

	}

}
function emailLCheck()
{
	var input = document.getElementById("lfield1");
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(!(input.value.match(mailformat)))
	{
		document.getElementById('l1first').innerHTML = "In-Valid email"+" &#10008";
		document.getElementById('l1first').style.color = "red";
	}
	else
	{
		document.getElementById('l1first').innerHTML = "Valid email"+" &#10004";
		document.getElementById('l1first').style.color = "lightgreen";

	}

}
function passwordLCheck()
{
	var input = document.getElementById("lfield2");
	if(input.value.length < 8)
	{
		document.getElementById('l2first').innerHTML = "Password is Too Short"+" &#10008";
		document.getElementById('l2first').style.color = "red";
	}
	else
	{
		document.getElementById('l2first').innerHTML = "Ok"+" &#10004";
		document.getElementById('l2first').style.color = "lightgreen";

	}

}