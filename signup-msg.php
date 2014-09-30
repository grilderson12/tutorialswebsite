<?php

require 'dbconnect.php';

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];
$signup = $_POST["signup"];

if($signup) {
	
	if($password&&$email) {
		echo $password, " is accept it.<br />";
		
			if($username) {
				
				echo $username, " is accept it.<br />";
				
					if($username&&$password) {
						
						echo "Congrats your account have been take it.<br />";
						
						$insert = 'INSERT into users(username, password, email) VALUES("'.$username.'","'.$password.'","'.$email.'")';
						mysql_query($insert);
						
					}else {
						
						echo "Fail to Register, Please try again now<br />";
						
					}
				
			}else {
				
				echo "Wrong username<br />";
				
			}
		
	}else {
		echo "Wrong Password<br />";
		
		
	}
	
}

?>
