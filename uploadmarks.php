<?php
include("connection.php");
if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $subject = $_POST['subject'];
        $marks = $_POST['eng'];
        $ids = $_POST['id'];
        $math = $_POST['mat'];
        $kis = $_POST['kis'];
        $chem = $_POST['chem'];
        $bio = $_POST['bio'];
        $phy = $_POST['phy'];
        $geo = $_POST['geo'];
        $bss = $_POST['bss'];


    for ( $i = 0; $i < count($ids); $i++){ 
        $id = $conn->real_escape_string($ids[$i]);
        $mark = $conn->real_escape_string($marks[$i]); 
        $mar = $conn->real_escape_string($math[$i]); 
        $ma = $conn->real_escape_string($kis[$i]); 
        $manu = $conn->real_escape_string($chem[$i]); 
        $manuh = $conn->real_escape_string($bio[$i]); 
        $muia = $conn->real_escape_string($phy[$i]); 
        $mwendwa = $conn->real_escape_string($geo[$i]); 
        $yoh = $conn->real_escape_string($bss[$i]); 
        $sql = "UPDATE resuls SET english = '$mark',mathematics='$mar',kiswahili= '$ma',chemistry='$manu',biology='$manuh',physics='$muia',geography='$mwendwa',businessstudies='$yoh' WHERE id = '$id'";
        $conn->query($sql);
    }
    header("location:result.php");    
 }else{
    echo "am not working";
 }
?>