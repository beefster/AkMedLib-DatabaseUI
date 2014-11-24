<?php
error_reporting(1);
require 'connect.php';


echo "hello world!";


$result = $db->query('SELECT * FROM stuff'); 

?>

<br />

<?php


if($result->num_rows) {
    echo $result->num_rows;
} else {
    echo "\r0";
}






?>