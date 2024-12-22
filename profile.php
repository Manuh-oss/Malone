<?php
  session_start();
  $password = htmlspecialchars($_COOKIE['pass']);
  $username = htmlspecialchars($_COOKIE['username']);   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="profile.css">
</head>
<body>
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
        <h2>Welcome:<?php echo "$username $password" ?>!!</h2>
       <?php 
       include("connection.php");
       $sql = "select * FROM studentdetails";
       $result = $conn->query($sql);
       $row =  $result->fetch_assoc();
       if($result->num_rows > 0){
        echo "
        <div class='details'>
            <div class='mine'>
                <div class='head'>
                   <h2>Student Details</h2>
                </div>
                <label for='name'>Name</label>
                <h4>$row[firstname] $row[middlename] $row[lastname]</h4>
                <label for='name'>Admission</label>
                <h4>$row[admission]</h4>
                <label for='name'>Date of birth</label>
                <h4>$row[dateofbirth]</h4>
                <label for='name'>Gender</label>
                <h3>$row[gender]</h3>
                <label for='name'>Class</label>
                <h3>$row[class]</h3>
            </div>";
            }
            ?>
            <?php
            include("connection1.php");
            $sql = "select * FROM parents1 ";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            if($result->num_rows > 0){
                echo "
            <div class='mine'>
                <div class='head'>
                   <h2>Parent Details</h2>
                </div>
                <label for='name'>Name</label>
                <h4>$row[firstname] $row[middlename] $row[lastname]</h4>
                <label for='name'>Identification</label>
                <h4>$row[identification]</h4>
                <label for='name'>Phone</label>
                <h4>$row[phone]</h4>
                <label for='name'>Gender</label>
                <h4>$row[gender]</h4>
                <label for='name'>Email</label>
                <h4></h4>
            </div>";
            }
            ?>
            <div class="mine">
                <div class="head">
                    <h2><table>Teacher's Details</table></h2>
                </div>
                <label for="name">Name</label>
                <h3></h3>
                <label for="name">Phone</label>
                <h3></h3>
                <label for="name">Identification</label>
                <h3></h3>
                <label for="name">Gender</label>
                <h3></h3>
                <label for="name">Email</label>
                <h3></h3>
            </div>
        </div>
    </main>
</body>
</html>