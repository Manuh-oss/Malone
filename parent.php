<?php
include("connection1.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $firstname = mysqli_real_escape_string($conn, $_POST['first']);
    $middlename = mysqli_real_escape_string($conn, $_POST['middle']);
    $lastname = mysqli_real_escape_string($conn, $_POST['last']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $identification = mysqli_real_escape_string($conn, $_POST['ident']);
    $admission = mysqli_real_escape_string($conn, $_POST['admission']);

    $sql = "select * FROM parents1 WHERE admission = '$admission' ";
    $result = mysqli_query($conn, $sql);
    $count_admission = mysqli_num_rows($result);

    if($count_admission == 0){
        $sql = "INSERT INTO parents1 (firstname,middlename,lastname,phone,gender,identification,admission) 
        VALUES ('$firstname','$middlename','$lastname','$phone','$gender','$identification','$admission')";
        if ($conn->query($sql ) === TRUE) {
            # code...
            header("location:enrol.html");
            echo "Student details updated sucessfully";
           }else{
            echo "error:".$conn->error;
           }
}else{
    echo  '<script>
    alert("Admission number already exist")
    window.location.href = "parent.html"
    </script>';
}
}else{
    echo "Am not working";
}