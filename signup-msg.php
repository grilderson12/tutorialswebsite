<?php

require "dbconfig.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

  if($email) {
    
    if($password) {
      
      echo $password, " is accept it.<br />";
      
    }else {
      
      echo "Wrong Password<br />";
      
    }
      
      if($username) {
        
        echo $username, " is accept it<br />";
        
      }else {
        
        echo "Wrong Username<br />";
        
      }
      
        if($username&&$password) {
          
          echo 'Congrats your account has been accept it.you can login now.<br />';
          
          $insert = 'INSERT into users(username, password, email) VALUES("'.$username.'","'.$password.'","'.$email.'")';
          mysql_query($insert);
          
        }else {
          
          echo 'Fail to LOGIN, Please try again now.<br />';
          
        }
    
  }

?>
