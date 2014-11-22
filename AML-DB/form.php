<!DOCTYPE html>
<html>
<head>   
<link rel="stylesheet" type="text/css" href="style.css">
    </head>
<body>
 
<?php
 
/* set the path in the below statement after DBQ=
im pretty sure if the accdb file is in the same folder, this should work */
     
$conn = odbc_connect('Driver={Microsoft 
Access Driver (*.mdb, *.accdb)}; 
DBQ=2014UAAClient.accdb','','');
 
//last 2 arguments are left blank if username and password are not required.
//if they are actually required, thats where the username and password go, respectively.
 
if (!$conn) {
  die("Failed to connect to database."); //if database connection fails, then you will see this message
}
 
//below is a simple form with a few text fields that will display if the connection works
 
<form action="query.php" method="post"> //query.php is any other .php (in the same folder) that this form data is sent to.
Text Field 1: <input type="text" name="textfield1"><br> //a text input field
Text Field 2: <input type="text" name="textfield2"><br>
<input type="submit"> //the submit button, which opens query.php
     
//see query.php now 
</form>
 
?>
 
</body>
</html>