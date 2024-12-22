
<?php
include("connection.php");
$sql = "select studentdetails.admission,studentdetails.firstname AS firstname,studentdetails.middlename AS middlename,studentdetails.lastname AS lastname,
resuls.mathematics AS mat,resuls.english AS eng,resuls.kiswahili AS kis,resuls.chemistry AS chem,resuls.biology AS bio,
resuls.physics AS phy,resuls.geography AS geo,resuls.businessstudies AS bss FROM studentdetails LEFT JOIN resuls ON studentdetails.admission = resuls.addmission";
$result = $conn->query($sql);
if($result->num_rows>0){
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
<form action="result.php" method="post">
<table>
  <tr>
      <th>A.D.N</th>
      <th>Name</th>
      <th>Math</th>
      <th>English</th>
      <th>Kiswahili</th>
      <th>Chemistry</th>
      <th>Biology</th>
      <th>Physics</th>
      <th>Geography</th>
      <th>Business</th>
  </tr>
  <?php while($row = $result->fetch_assoc()){?>
      <tr>
          <td><?php echo htmlspecialchars($row['admission']); ?></td>
          <td><?php echo htmlspecialchars($row['firstname']).htmlspecialchars($row['middlename']).htmlspecialchars($row['lastname']); ?></td>
          <td><?php echo htmlspecialchars($row['mat']); ?></td>
          <td><?php echo htmlspecialchars($row['eng']); ?></td>
          <td><?php echo htmlspecialchars($row['kis']); ?></td>
          <td><?php echo htmlspecialchars($row['chem']); ?></td>
          <td><?php echo htmlspecialchars($row['bio']); ?></td>
          <td><?php echo htmlspecialchars($row['phy']); ?></td>
          <td><?php echo htmlspecialchars($row['geo']); ?></td>
          <td><?php echo htmlspecialchars($row['bss']); ?></td>
      </tr>
  <?php
}  
echo"
</table>
<a href='uploadandedit.php'>
<button class='edit'>Edit</button></a>   ";      
?>
<?php
}else{
  echo "No record found";
}
$conn->close();
?>
</form>
</main>
</body>
</html>