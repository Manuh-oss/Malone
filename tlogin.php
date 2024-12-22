<?php
session_start();
include("connection.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
   $username = $_POST['username'];
   $password = $_POST['pass'];

   $sql = "select * FROM resuls WHERE firstname = ? AND addmission = ?";
   $stmt = $conn->prepare($sql);
   $stmt->bind_param("ss", $username,$password);

   $_SESSION['username'] = $username;

   $stmt->execute();
   $result = $stmt->get_result();

   if($result->num_rows > 0){
    if($password > 0){
      setcookie("username" , $username, time() +3600, "/");
      setcookie("pass" , $password, time() +3600, "/");
            
     header("location:teaportal.php");
      exit();
      }else{
        echo '<script>
        alert("Wrong password")
        window.location.href = "tlogin.html"
        </script>';
      }
   }else{
    echo '<script>
    alert("invalid username")
    window.location.href = "tlogin.html"
    </script>';
   }
  $stmt->close();
}else{
    echo "Am not working";
}$conn->close();