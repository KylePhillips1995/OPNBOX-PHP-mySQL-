<?php

//connects to host 

$host = "localhost";
$dbUsername = "root";
$dbPassword = "1234";
$dbname= "opnbox";
//create connection



    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    
    else {
        $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
        }
    




