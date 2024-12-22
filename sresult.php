<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sresult.css">
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
        <H1>Student Result</H1>
        <div class="main">
            
            <?php
              include("connection.php");
              if($_SERVER['REQUEST_METHOD']==='POST'){
                $admission = $_POST['admiss'];
              }
              $sql = "select * FROM studentdetails";
              $result = $conn->query($sql);
              $row = $result->fetch_assoc();
            ?>
        
            <div class="profile">
                <label for="name">Name</label><br>
                <h4><?php echo htmlspecialchars($row['firstname']) . htmlspecialchars($row['middlename']) . htmlspecialchars($row['lastname']);?></h4>
                <label for="admission">Admission Number</label><br>
                <h4><?php echo htmlspecialchars($row['admission']);?></h4>
                <label for="class">Class</label><br>
                <h4><?php echo htmlspecialchars($row['class']);?></h4>
            </div>
            <div class="profileS">
                
                <?php
            include("connection.php");
               $sql = "select * FROM resuls";
               $result = $conn->query($sql);
               $row = $result->fetch_assoc();
               $total = $row['english']+$row['mathematics']+$row['kiswahili']+$row['chemistry']+$row['biology']+$row['physics']+$row['geography']+$row['businessstudies'];
               $meangrade = $total/8;
               include("mgarde.php");
              // $query = " SELECT total ROW() OVER (ORDER BY total DESC) AS position FROM resuls";
              // $results = $conn->query($query);
               //$rows = $result->fetch_assoc();
              
               ?>
            
            <div class="yoh"> 
               <div class="markk">
               <label for="marks">Marks</label>
               <h3><?php echo $total?></h3>
               <label for="marks">Mean Mark</label>
                <h3><?php echo $meangrade?></h3>
               </div>
               <div class="position">
               <label for="marks">Position</label>
                <h3><?php ?></h3>
                <label for="marks">Overall position</label>
                <h3></h3>
               </div>
            </div> 
            <label for="marks">Mean Grade</label>
            <h3><?php echo $yoh  ?></h3>               
            </div>
        </div>
        <div class="marks">
            <?php
               include("connection.php");
               $sql = "select * FROM resuls";
               $result = $conn->query($sql);
               $row = $result->fetch_assoc();
               $marks = $row['mathematics'];
               $mark = $row['english'];
               $scores = $row['kiswahili'];
               include("grade.php");               
            ?>
            <table>
               <tr style="background-color: wheat;">
                <th>Name</th>
                <th>Marks</th>
                <th>Grade</th>
                <th>Rank</th>
                <th>Change</th>
               </tr>  
               <tr style="background-color: whitesmoke;">
                <td>English</td>
                <td><?php echo htmlspecialchars($row['english'])?></td>
                <td><?php echo $scoes?></td>
                <td><?php?></td>
                <td></td>
               </tr> 
               <tr style="background-color: wheat;">
                <td>Math</td>
                <td><?php echo htmlspecialchars($row['mathematics'])?></td>
                <td><?php echo $score;?></td>
                <td></td>
                <td></td>
               </tr>
               <tr style="background-color: whitesmoke;">
                <td>kiswahili</td>
                <td><?php echo htmlspecialchars($row['kiswahili'])?></td>
                <td><?php echo htmlspecialchars($kiss);?></td>
                <td></td>
                <td></td>
               </tr>
               <tr style="background-color: wheat;">
                <td>Chemistry</td>
                <td><?php echo htmlspecialchars($row['chemistry'])?></td>
                <td><?php echo htmlspecialchars($chemm);?></td>
                <td></td>
                <td></td>
               </tr>
               <tr style="background-color: whitesmoke;">
                <td>Biology</td>
                <td> <?php echo htmlspecialchars($row['biology'])?></td>
                <td><?php echo htmlspecialchars($bioo);?></td>
                <td></td>
                <td></td>
               </tr>
               <tr style="background-color: wheat;">
                <td >Physics</td>
                <td><?php echo htmlspecialchars($row['physics'])?></td>
                <td><?php echo htmlspecialchars($phyy);?></td>
                <td></td>
                <td></td>
               </tr>
               <tr style="background-color: whitesmoke;">
                <td >Geography</td>
                <td><?php echo htmlspecialchars($row['geography'])?></td>
                <td><?php echo htmlspecialchars($geoo);?></td>
                <td></td>
                <td></td>
               </tr>
               <tr style="background-color: wheat;">
                <td>Business</td>
                <td><?php echo htmlspecialchars($row['businessstudies'])?></td>
                <td><?php echo htmlspecialchars($bsss);?></td>
                <td></td>
                <td></td>
               </tr>
            </table>
        </div>
    </main>
</body>
</html>