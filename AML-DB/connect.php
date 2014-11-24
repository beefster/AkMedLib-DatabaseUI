<?php
error_reporting(1);


$db = new mysqli('localhost', 'root', '', 'blee'); //path, user, password, database

$error = $db->connect_errno;

if ($error != 0) {
  die("Database erorr"); //if database connection fails, then you will see this message
}


