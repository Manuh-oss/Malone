<?php
    include("connection.php");
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $admission = mysqli_real_escape_string($conn, $_POST['admis']);
        echo "";
    }else{
        echo "am not working";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="profile.css">
</head>

<header>
<div class="logo">
        <img width="40px" src="hd_a7dccd243da2f4aa7fb8b2289e299288.jpg" alt="">
        <div class="name">
            <h5>SIBIAH STAR</h5>
            <h6>SCHOOL </h6>
        </div>
     </div>
</header>
<main>   
<body>
    <form action="" method="post">
        <input type="number" name="admis" required placeholder="Enter admission number">
        <button type="submit">-></button>
    
        <?php
           include("connection.php");
           $sql = "select * FROM studentdetails WHERE admission = '$admission'";
           $result = $conn->query($sql);
           if(!$result){
              die("no students found");
           }
           while($row = $result->fetch_assoc()){
            echo "<div class='detail'>
                   <div class='mines'>
                <div class='head'><h2>Details</h2></div>
                <h4>Name</h4>
                <p>$row[firstname] $row[middlename] $row[lastname]</p>
                <h4>Date of Birth</h4>
                <p>$row[dateofbirth]</p>
                <h4>Gender</h4>
                <p>$row[gender]</p>
                <h4>Class</h4>
                <p>$row[class]</p>
                <h4>Admission</h4>
                <p>$row[admission]</p>                
            </div>
            ";
               
           }
                                  
           ?>
           <?php
             include("connection1.php");

             $sql = "select * FROM parents1 WHERE admission = '$admission'";
             $result = $conn->query($sql);
             if(!$result){
                die("invalid connection");
             }while($row = $result->fetch_assoc()){
              echo "  <div class='mines'>
                <div class='head'><h2>Parent Details</h2></div>
                <h4>Name</h4>
                <p>$row[firstname] $row[middlename] $row[lastname]</p>
                <h4>Identification</h4>
                <p>$row[identification]</p>
                <h4>Phone Number</h4>
                <p>$row[phone]</p>
                <h4>Email</h4>
                <p></p>
            </div>
            </div>
            ";
             }
           ?>
           </form>
            </main>
</body>
</html>