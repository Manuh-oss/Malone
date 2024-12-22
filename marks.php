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
      <select name="form" id="">
        <option value="">Form1</option>
        <option value="">Form2</option>
        <option value="">Form3</option>
        <option value="">Form4</option>
      </select>
      <select name="subject" id="">
        <option name="English" value="English">English</option>
        <option name="Kiswahili" value="Kiswahili">Kiswahili</option>
        <option name="Mathematics" value="Mathematics">Mathematics</option>
        <option name="Chemistry" value="Chemistry">Chemistry</option>
        <option name="Biology" value="Biology">Biology</option>
        <option name="Physics" value="Physics">Physics</option>
        <option name="Geography" value="Geography">Geography</option>
        <option name="Business" value="Business">Business</option>
      </select>     
      </form>
      <form action='uploadmarks.php' method='post'>
      <table>
        <tr>
          <th>Id</th>
          <th>A.D.N</th>
          <th>Name</th>
          <th>English</th>
          <th>Kiswahili</th>
          <th>Mathematics</th>
          <th>Chemistry</th>
          <th>Biology</th>
          <th>Physics</th>
          <th>Geography</th>
          <th>Business</th>
        </tr>
      <?php
          include("connection.php");
          $sql = "select * FROM  resuls ";
          $result = $conn->query($sql);
          if($result->num_rows > 0):?>
          <?php while($row = $result->fetch_assoc()):?>
            <tr>          
              <td><input type="hidden" name="id[]" value= "<?php echo $row['id'];?>"><?php echo $row['id']?> </td>
              <td><?php echo $row['addmission']?></td>
              <td><?php echo $row['firstname'].$row['middlename'].$row['lastname']?></td><br>
              <td><input type='number' placeholder='english' name='eng[]' value="<?php$row['english']?>"></td>
              <td><input type='number' placeholder='kiswahili' name='kis[]' value="<?php$row['kiswahili']?>"></td>
              <td><input type='number' placeholder='Math' name='mat[]' value="<?php$row['mathematics']?>"></td>
              <td><input type='number' placeholder='Chemistry' name='chem[]' value="<?php$row['english']?>"></td>
              <td><input type='number' placeholder='Biology' name='bio[]' value="<?php$row['english']?>"></td>
              <td><input type='number' placeholder='Physics' name='phy[]' value="<?php$row['english']?>"></td>
              <td><input type='number' placeholder='Geography' name='geo[]' value="<?php$row['english']?>"></td>
              <td><input type='number' placeholder='Business' name='bss[]' value="<?php$row['english']?>"></td>
            </tr>
            <?php endwhile ;?>
            <?php else:?>
            <tr>
              <td colspan="3">NO RECORDS FOUND!!!</td>
            </tr>
            <?php endif?>
          </table>
        <button type="submit">Upload</button>
      </form>       
    </main>
</body>
</html>