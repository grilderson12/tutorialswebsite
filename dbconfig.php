<?php

$connect = mysql_connect("HOST", "Username", "Password") or die ("Error, couldn't connect to the Server");
mysql_select_db("Database", $connect) or die("Error, couldn't find the database");

?>
