<?php
session_start();
include("connection.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   $usernamee = $_POST['username'];
   $passwordd = $_POST['pass'];

   $sql = "select * FROM studentdetails WHERE firstname = '$usernamee'";
   $result = mysqli_query( $conn, $sql);
   $count_user = mysqli_num_rows($result);

   $sql = "select * FROM studentdetails WHERE admission = '$passwordd'";
   $result = mysqli_query( $conn, $sql);
   $count_user = mysqli_num_rows($result);

   $row = $result->fetch_assoc();

   
}