<?php

require "dbconfig.php";

$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

  if($email) {
    
  echo "Sign UP now :)";
    
    if($password) {
      
      echo $password, " is accept it.";
      
    }else {
      
      echo "Wrong Password";
      
    }
      
      if($username) {
        
        echo $username, " is accept it";
        
      }else {
        
        echo "Wrong Username";
        
      }
      
        if($username&&$password) {
          
          echo 'Congrats your has been accept it.you can login now.';
          
          $insert = 'INSERT into users(username, password, email) VALUES("'.$username.'","'.$password.'","'.$email.'")';
          mysql_query($insert);
          
        }else {
          
          echo 'Fail to LOGIN, Please try again now.';
          
        }
    
  }

?>
