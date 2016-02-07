function sign_up()
{

	var f = new XMLHttpRequest();
	var url = "signUplogIn.php";
	var firstname = document.getElementById("sfield1").value;
	var surname = document.getElementById("sfield2").value;
	var phone = document.getElementById("sfield3").value;
	var email = document.getElementById("sfield4").value;
	var password = document.getElementById("sfield5").value;
	var password1 = document.getElementById("sfield6").value;
	var submit = document.getElementById("submit").value;
	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
	if(firstname == "" || firstname <3 ){
		document.getElementById("wrong").innerHTML = "toshort";
		
	}
	if(surname == "" || firstname <1 ){
		document.getElementById("wrong").innerHTML = "toshort";
	}
	else if(phone == "" || phone ==10 ){
		document.getElementById("wrong").innerHTML = "invalid phone number";
	}
	else if(email == "" || !(email.match(mailformat))){
		document.getElementById("wrong").innerHTML = "invalid email id";
	}
	else if(password == "" || firstname <8){
		document.getElementById("wrong").innerHTML = "password is short";
	}
	else if(password1 == "" || (password1 !== password) ){
		document.getElementById("wrong").innerHTML = "password retype not match";
		
	}

	else
	{
		var data = "firstname="+firstname+"&surname="+surname+"&number="+phone+"&email="+email+"&password="+password+"&password1="+password1+"&sign-up="+submit;
		f.open("post",url,true);
		f.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
		f.onreadystatechange = function()
		{
			if(f.readyState == 4 && f.status == 200)
			{
				var result = f.responseText;
				document.getElementById("wrong").innerHTML = result;
			}
		}
		f.send(data);
		document.getElementById("wrong").innerHTML = "signing up...";
	}
}


function log_in()
{
	var f = new XMLHttpRequest();
	var url = "login.php";
	var email = document.getElementById("lfield1").value;
	var password = document.getElementById("lfield2").value;
	var data = "email="+email+"&password="+password;
	f.open("post",url,true);
	f.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	f.onreadystatechange = function()
	{
		if(f.readyState == 4 && f.status == 200)
		{
			var result = f.responseText;
			
			if(result == "true"){
				window.location.href = "todoHomeScreen.php";
			}
			else
			{
					document.getElementById("loginnn").innerHTML = "Enter Email and Password correctly";
			}
		}
	}
	f.send(data);
	document.getElementById("loginnn").innerHTML = "Checking...."
	/*var f = new XMLHttpRequest();
	var url = "hmm.php";
	var email = document.getElementById("lfield1").value;
	var password = document.getElementById("lfield2").value;
	var login = document.getElementById("loginn").value;
	if(email == "" && password == "")
	{
		document.getElementById("loginnn").innerHTML = "fill two fields";
	}
	else
	{
		var data1 = "email="+email+"&password="+password;
		f.open("post",url,true);
		f.setRequestHeader = function()
		{
			if(f.readyState == 4 && f.status == 200)
			{
				var results = f.responseText;
				document.getElementById("loginnn").innerHTML = results;
			}
		}
		f.send(data1);
		document.getElementById("loginnn").innerHTML = "Login...."
	}*/
}




function nameCheck()
{
	var input1 = document.getElementById("sfield1");
	var tag = document.getElementById('sfirst');
	if(input1.value.length < 3)
	{
		tag.innerHTML = "Too Short"+" &#10008";
		tag.style.color = "red";
	}
	else 
	{
		tag.innerHTML = "";

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
		document.getElementById('s2first').innerHTML = "";

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
		document.getElementById('s3first').innerHTML = "";

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


}


function emailCheckdynamic()
{
	var f = new XMLHttpRequest();
	var url = "signUplogIn.php";
	var email = document.getElementById("sfield4").value;
	var data = "email="+email;
	f.open("post",url,true);
	f.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	f.onreadystatechange = function()
	{
		if(f.readyState == 4 && f.status == 200)
		{
			var result = f.responseText;
			document.getElementById("s4first").innerHTML = result;
		}
	}
	f.send(data);
	document.getElementById("s4first").innerHTML = "Checking...."
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
		document.getElementById('s5first').innerHTML = "";
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
function deleteAll()
{
	var yesNo = confirm("Do you want to really delete all the list items?");
	return yesNo;
}
