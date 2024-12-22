<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $firstname = mysqli_real_escape_string($conn, $_POST['first']);
    $midddlename = mysqli_real_escape_string($conn, $_POST['middle']);
    $lastname = mysqli_real_escape_string($conn, $_POST['last']);
    $date = mysqli_real_escape_string($conn, $_POST['datte']);
    $admission = mysqli_real_escape_string($conn, $_POST['admission']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $class = mysqli_real_escape_string($conn, $_POST['class']);

    $sql = "select * FROM studentdetails WHERE admission = '$admission'";
    $result = mysqli_query($conn , $sql);
    $count_admission = mysqli_num_rows($result);
   $conn->begin_transaction();
      try{
    if($count_admission == 0 ){
        $sql = "INSERT INTO studentdetails( firstname, middlename,lastname,dateofbirth,admission,gender,class )
        VALUES ('$firstname','$midddlename','$lastname','$date','$admission','$gender','$class')";

        
       if ($conn->query($sql ) === TRUE) {
        # code...    
        header("location:parent.html");
       }else{
        echo "error:".$conn->error;
       }
       //insert into table two(2)
       $sql2 = "INSERT INTO resuls (addmission,firstname,middlename,lastname )VALUES('$admission','$firstname','$midddlename','$lastname')";
       if ($conn->query($sql2 ) === TRUE) {
        # code...    
        header("location:parent.html");
       }else{
        echo "error2:".$conn->error;
       }
       $conn->commit();
       echo "Data added sucessfully";
       } else{
        echo '<script>
        alert("Admission Numcer Already Exist");
        window.location.href = "enrol.html";
        </script>';
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);

    }
    }catch(Execption $e){
        $conn->rollback();
        echo "Failed to connect ".$e->getMessage();
    }
    }else{
        echo "Am not working".$conn->error;
    }
    ?>