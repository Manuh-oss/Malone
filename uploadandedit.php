<?php
 $subject = $_POST['subject'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="edit.css">
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
      <select name="form" id="">
        <option value="">Form1</option>
        <option value="">Form2</option>
        <option value="">Form3</option>
        <option value="">Form4</option>
      </select>
      <select name="subject" id="">
        <option name="subject" value="">English</option>
        <option value="">Kiswahili</option>
        <option value="">Mathematics</option>
        <option value="">Chemistry</option>
        <option value="">Biology</option>
        <option value="">Physics</option>
        <option value="">Geography</option>
        <option value="">Business</option>
      </select>
      <table>
        <tr>
          <th>A.D.N</th>
          <th>Name</th>
          <th>Subject</th>
        </tr>
        <?php
          include("connection.php");
          $sql = "select * FROM studentdetails";
          $result = $conn->query($sql);
          while($row = $result->fetch_assoc()){
             if($subject = 'english'){
            echo "
            <tr>
              <td>$row[admission]</td>
              <td>$row[firstname] $row[middlename] $row[lastname]</td>
              <td><input type='number' name='eng'></td>
            </tr>
          </table>";
          }elseif($subject == 'kiswahili'){
            echo "<table>
            <tr>
              <th>A.D.N</th>
              <th>Name</th>
              <th>kiswahili</th>
            </tr>
            <tr>
              <td>$row[admission]</td>
              <td>$row[firstname] $row[middlename] $row[lastname]</td>
              <td><input type='number' name='kis'></td>
            </tr>
          </table>";
          }elseif($subject == 'mathematics'){
            echo "<table>
            <tr>
              <th>A.D.N</th>
              <th>Name</th>
              <th>Mathematics</th>
            </tr>
            <tr>
              <td>$row[admission]</td>
              <td>$row[firstname] $row[middlename] $row[lastname]</td>
              <td><input type='number' name='math'></td>
            </tr>
          </table>";
          }

         } 
        ?>

        <button type="submit">Upload</button>
      </form>       
    </main>
</body>
</html>