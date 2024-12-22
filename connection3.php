<?php
$servername2 = "localhost";
$username2 = "root";
$password2 = "";
$dbname2 = "results";

$conn2  = new mysqli($servername2, $username2, $password2, $dbname2);


if($conn->connect_error){
    die("Connection failed").$conn->connect_error;
}else{
    echo "connected";
}