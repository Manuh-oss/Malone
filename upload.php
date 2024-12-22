<?php
  include("connection.php");
?>
<?php
  include("connection.php");
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $math = $_POST['math'];
    $eng = $_POST['eng'];
    $kis = $_POST['kis'];
    $chem = $_POST['chem'];
    $bio = $_POST['bio'];
    $phy = $_POST['phy'];
    $geo = $_POST['geo'];
    $bss = $_POST['bss'];
    $admission = $_POST['admission'];

    $sql = "INSERT INTO resuls (mathematics,english,kiswahili,chemistry,biology,physics,geography,businessstudies,admission)
    VALUES('$math','$eng','$kis','$chem','$bio','$phy','$geo','$bss','$admission')";
      if ($conn->query($sql ) === TRUE) {
        # code...
        header("location:result.php");
       }else{
        echo "error:".$conn->error;
       }
    
    
  }else{
    echo "fala";
  }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="result.css">
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
        <form action="" method="post">
            
            <table>
                <tr>
                    <th>Id</th>
                    <th>A.D.N</th>
                    <th>Name</th>
                    <th>Eng</th>
                    <th>Kis</th>
                    <th>Mat</th>
                    <th>Chem</th>
                    <th>Bio</th>
                    <th>Phy</th>
                    <th>Geo</th>
                    <th>Bss</th>
                    <th>Action</th>
                </tr>
                <?php
                
                 include("connection.php");
                $sql ="select * FROM studentdetails";
                $result = $conn->query($sql);
                if(!$result){
                    die("connection  faailed");
                }while($row = $result->fetch_assoc()){
                    $admission = $row['admission'];
                    
                    echo "<tr>
                    <td>$row[Student_id]</td>
                    <td name='admission'>$row[admission]</td>
                    <td>$row[firstname] $row[middlename] $row[lastname]</td>
                    <td><input type='number'name='math'></td>
                    <td><input type='number'name='eng'></td>
                    <td><input type='number'name='kis'> </td>
                    <td><input type='number'name='chem'></td>
                    <td><input type='number'name='bio'></td>
                    <td><input type='number'name='phy'></td>
                    <td><input type='number'name='geo'></td>
                    <td><input type='number' name='bss'></td>
                    <td><input type='number' name='admission'></td>
                   </tr>";
                }
                ?>
            </table>
            <button type="submit">upload</button>
        </form>
    </main>
</body>
</html>