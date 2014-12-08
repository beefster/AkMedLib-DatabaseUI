<?php

/* 
//TODO: Take login information from login page
 */

$dbc = mysqli_connect("localhost", "aml_user", "password", "aml")
        OR die (mysqli_connect_error() );

mysqli_set_charset($dbc, "utf-8");

if(mysqli_ping($dbc) ) {
    echo "Connected!";
}