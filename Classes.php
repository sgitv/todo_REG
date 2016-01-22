<?php
error_reporting(0);
 class Compare
 {
 	public $email="";
 	public $username="";
 	public $password="";
 	public $userid="";
 	public function __construct($email,$password)
 	{
 		$this->email = $email;
 		$this->password = $password;
 	}
 	public function check()
 	{

 		$db = new PDO('mysql:dbname=todo;host=localhost','root',''); 
 		$stmt = $db->prepare("SELECT * FROM users WHERE email=:email_id");
		$stmt->execute(array(":email_id"=>$email));
		$userRow=$stmt->fetch(PDO::FETCH_ASSOC);
		if(($userRow['email'] === $email)&&($userRow['password'] === $password))
		{
			$username = $userRow['username'];

			return true;
		}
		else
		{
			return false;
		}
 	}
 }
?>