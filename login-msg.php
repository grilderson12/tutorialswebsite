<?php

session_start();

require 'dbconnect.php';

$username = $_POST['username'];
$password = $_POST['password'];


if ($username&&$password) {

	$query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");
	$numrows = mysql_num_rows($query);

	if($numrows!==0) {
		while($row = mysql_fetch_assoc($query)) {
			
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
			$username = $row['username'];
			$password = $row['password'];
			
		}

			if($username==$dbusername&&$password==$dbpassword) {
				
				echo $username    ;
				$_SESSION['username'] = $username;
				
					echo '<br /><a href="login.php" style="line-height:25px;text-decoration:none;list-style-type:none;">LOGOUT</a>';
				
			}else {
				die("Wrong username");
			}
			
	}else {
	
		die ('Wrong password');
	
	}
		
}else {
	die("Wrong username");

}

?>
