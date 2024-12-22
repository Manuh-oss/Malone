<?php
  include("connection.php");

  $sql = "TRUNCATE TABLE studentdetails
  ";
  if($conn->query($sql) === TRUE){
    echo "all data is succesfully deleted";
  }else{
    echo"error:".$conn->error;
  }
?>
 