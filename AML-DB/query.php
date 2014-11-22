<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
<?php // check out http://php.net/manual/en/book.uodbc.php for good explanations of the function calls
 
// also see http://itwebtutorials.net/PHP/PHP09/php09-01.php
 
$conn = odbc_connect('Driver={Microsoft 
Access Driver (*.mdb, *.accdb)}; 
DBQ=c:\path to database\database.accdb','','');
 
$text1 = $_POST["textfield1"];
$text2 = $_POST["textfield2"];
 
$recordset = odbc_exec($conn, 'SQL statement here, using $text1 and $text2 etc to use values posted from the form');
 
?>
 
</body>
</html>