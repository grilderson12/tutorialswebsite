<?php

	echo "SIGN UP NOW<br />";

require "dbconnect.php";

$username = $_POST["username"];
$password = $_post["password"];
$email = $_POST["email"];

if($email) {

  if($password) {
    
    echo $password, " is accept it.<br />";
    
    if($username) {
      
      echo $username, "is accept it.";
      
        if($username&&$password) {
          
          echo "Congrats your account has been take it.";
          
          $insert 'INSERT into users(username, password, email) VALUES("'.$username.'","'.$password.'","'.$email.'")';
          mysql_query($insert);
          
        }
      
    }else {
    
      echo "Wrong username.";  
      
    }
    
  }else {
    
    echo "Wrong password.";
    
  }

}

?>
