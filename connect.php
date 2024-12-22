<?php
$servername = "localhost";
$username = "root";
$password = "Malone2006";
$db_name = "results";

$conn = new mysqli($servername,$username,$password,$db_name,3307);

if($conn->connect_error){
  die("connection failed !!").$conn->connect_error;
}else{
  echo "connected";
}

?>