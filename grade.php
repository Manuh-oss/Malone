<?php
   include("connection.php");
   $sql = "select * FROM resuls";
   $result = $conn->query($sql);
   $row = $result->fetch_assoc();
   $marks = $row['mathematics'];
   $mark = $row['english'];
   $scores = $row['kiswahili'];
   $mar = $row['chemistry'];
   $ma = $row['biology'];
   $mak = $row['physics'];
   $manuh = $row['geography'];
   $manu = $row['businessstudies'];


   function gradeValue($marks){
    if($marks < 34){
        return "E";
    }elseif($marks <= 39 ){
       if($marks >= 35 ){
        return "D-";
       }
    }elseif($marks <= 44 ){
        if($marks >= 40 ){
         return "D";
        }
     }elseif($marks <= 49 ){
        if($marks >= 45 ){
         return "D+";
        }
     }elseif($marks <= 54 ){
        if($marks >= 50 ){
         return "C-";
        }
     }elseif($marks <= 59 ){
        if($marks >= 55 ){
         return "C";
        }
     }elseif($marks <= 64 ){
        if($marks >= 60 ){
         return "C+";
        }
     }elseif($marks <= 69 ){
        if($marks >= 65 ){
         return "B-";
        }
     }elseif($marks <= 74 ){
        if($marks >= 70 ){
         return "B";
        }
     }elseif($marks <= 79 ){
        if($marks >= 75 ){
         return "B+";
        }
     }elseif($marks <= 84 ){
        if($marks >= 80 ){
         return "A-";
        }
     }elseif($marks >= 85){
        return "A";
     }
}
   $score = gradeValue($marks);
   function gradeVallue($mark){
    if($mark < 34){
        return "E";
    }elseif($mark <= 39 ){
       if($mark >= 35 ){
        return "D-";
       }
    }elseif($mark <= 44 ){
        if($mark >= 40 ){
         return "D";
        }
     }elseif($mark <= 49 ){
        if($mark >= 45 ){
         return "D+";
        }
     }elseif($mark <= 54 ){
        if($mark >= 50 ){
         return "C-";
        }
     }elseif($mark <= 59 ){
        if($mark >= 55 ){
         return "C";
        }
     }elseif($mark <= 64 ){
        if($mark >= 60 ){
         return "C+";
        }
     }elseif($mark <= 69 ){
        if($mark >= 65 ){
         return "B-";
        }
     }elseif($mark <= 74 ){
        if($mark >= 70 ){
         return "B";
        }
     }elseif($mark <= 79 ){
        if($mark >= 75 ){
         return "B+";
        }
     }elseif($mark <= 84 ){
        if($mark >= 80 ){
         return "A-";
        }
     }elseif($mark >= 85){
        return "A";
     }

}
$scoes = gradeVallue($mark);
function gradeValllue($scores){
    if($scores < 34){
        return "E";
    }elseif($scores <= 39 ){
       if($scores >= 35 ){
        return "D-";
       }
    }elseif($scores <= 44 ){
        if($scores >= 40 ){
         return "D";
        }
     }elseif($scores <= 49 ){
        if($scores >= 45 ){
         return "D+";
        }
     }elseif($scores <= 54 ){
        if($scores >= 50 ){
         return "C-";
        }
     }elseif($scores <= 59 ){
        if($scores >= 55 ){
         return "C";
        }
     }elseif($scores <= 64 ){
        if($scores >= 60 ){
         return "C+";
        }
     }elseif($scores <= 69 ){
        if($scores >= 65 ){
         return "B-";
        }
     }elseif($scores <= 74 ){
        if($scores >= 70 ){
         return "B";
        }
     }elseif($scores <= 79 ){
        if($scores >= 75 ){
         return "B+";
        }
     }elseif($scores <= 84 ){
        if($scores >= 80 ){
         return "A-";
        }
     }elseif($scores >= 85){
        return "A";
     }
}
$kiss = gradeValllue($scores);

function gradeValllllue($ma){
    if($ma < 34){
        return "E";
    }elseif($ma <= 39 ){
       if($ma >= 35 ){
        return "D-";
       }
    }elseif($ma <= 44 ){
        if($ma >= 40 ){
         return "D";
        }
     }elseif($ma <= 49 ){
        if($ma >= 45 ){
         return "D+";
        }
     }elseif($ma <= 54 ){
        if($ma >= 50 ){
         return "C-";
        }
     }elseif($ma <= 59 ){
        if($ma >= 55 ){
         return "C";
        }
     }elseif($ma <= 64 ){
        if($ma >= 60 ){
         return "C+";
        }
     }elseif($ma <= 69 ){
        if($ma >= 65 ){
         return "B-";
        }
     }elseif($ma <= 74 ){
        if($ma >= 70 ){
         return "B";
        }
     }elseif($ma <= 79 ){
        if($ma >= 75 ){
         return "B+";
        }
     }elseif($ma <= 84 ){
        if($ma >= 80 ){
         return "A-";
        }
     }elseif($ma >= 85){
        return "A";
     }

}
$bioo = gradeValllllue($ma);
function gradeVallllue($mar){
    if($mar < 34){
        return "E";
    }elseif($mar <= 39 ){
       if($mar >= 35 ){
        return "D-";
       }
    }elseif($mar <= 44 ){
        if($mar >= 40 ){
         return "D";
        }
     }elseif($mar <= 49 ){
        if($mar >= 45 ){
         return "D+";
        }
     }elseif($mar <= 54 ){
        if($mar >= 50 ){
         return "C-";
        }
     }elseif($mar <= 59 ){
        if($mar >= 55 ){
         return "C";
        }
     }elseif($mar <= 64 ){
        if($mar >= 60 ){
         return "C+";
        }
     }elseif($mar <= 69 ){
        if($mar >= 65 ){
         return "B-";
        }
     }elseif($mar <= 74 ){
        if($mar >= 70 ){
         return "B";
        }
     }elseif($mar <= 79 ){
        if($mar >= 75 ){
         return "B+";
        }
     }elseif($mar <= 84 ){
        if($mar >= 80 ){
         return "A-";
        }
     }elseif($mar >= 85){
        return "A";
     }
}
$chemm = gradeVallllue($mar);

function gradeValuue($mak){
    if($mak < 34){
        return "E";
    }elseif($mak <= 39 ){
       if($mak >= 35 ){
        return "D-";
       }
    }elseif($mak <= 44 ){
        if($mak >= 40 ){
         return "D";
        }
     }elseif($mak <= 49 ){
        if($mak >= 45 ){
         return "D+";
        }
     }elseif($mak <= 54 ){
        if($mak >= 50 ){
         return "C-";
        }
     }elseif($mak <= 59 ){
        if($mak >= 55 ){
         return "C";
        }
     }elseif($mak <= 64 ){
        if($mak >= 60 ){
         return "C+";
        }
     }elseif($mak <= 69 ){
        if($mak >= 65 ){
         return "B-";
        }
     }elseif($mak <= 74 ){
        if($mak >= 70 ){
         return "B";
        }
     }elseif($mak <= 79 ){
        if($mak >= 75 ){
         return "B+";
        }
     }elseif($mak <= 84 ){
        if($mak >= 80 ){
         return "A-";
        }
     }elseif($mak >= 85){
        return "A";
     }
}
$phyy = gradeValuue($mak);

function gradeValuuue($manuh){
    if($manuh < 34){
        return "E";
    }elseif($manuh <= 39 ){
       if($manuh >= 35 ){
        return "D-";
       }
    }elseif($manuh <= 44 ){
        if($manuh >= 40 ){
         return "D";
        }
     }elseif($manuh <= 49 ){
        if($manuh >= 45 ){
         return "D+";
        }
     }elseif($manuh <= 54 ){
        if($manuh >= 50 ){
         return "C-";
        }
     }elseif($manuh <= 59 ){
        if($manuh >= 55 ){
         return "C";
        }
     }elseif($manuh <= 64 ){
        if($manuh >= 60 ){
         return "C+";
        }
     }elseif($manuh <= 69 ){
        if($manuh >= 65 ){
         return "B-";
        }
     }elseif($manuh <= 74 ){
        if($manuh >= 70 ){
         return "B";
        }
     }elseif($manuh <= 79 ){
        if($manuh >= 75 ){
         return "B+";
        }
     }elseif($manuh <= 84 ){
        if($manuh >= 80 ){
         return "A-";
        }
     }elseif($manuh >= 85){
        return "A";
     }
}
$geoo = gradeValuuue($manuh);

function gradeValuuuue($manu){
    if($manu < 34){
        return "E";
    }elseif($manu <= 39 ){
       if($manu >= 35 ){
        return "D-";
       }
    }elseif($manu <= 44 ){
        if($manu >= 40 ){
         return "D";
        }
     }elseif($manu <= 49 ){
        if($manu >= 45 ){
         return "D+";
        }
     }elseif($manu <= 54 ){
        if($manu >= 50 ){
         return "C-";
        }
     }elseif($manu <= 59 ){
        if($manu >= 55 ){
         return "C";
        }
     }elseif($manu <= 64 ){
        if($manu >= 60 ){
         return "C+";
        }
     }elseif($manu <= 69 ){
        if($manu >= 65 ){
         return "B-";
        }
     }elseif($manu <= 74 ){
        if($manu >= 70 ){
         return "B";
        }
     }elseif($manu <= 79 ){
        if($manu >= 75 ){
         return "B+";
        }
     }elseif($manu <= 84 ){
        if($manu >= 80 ){
         return "A-";
        }
     }elseif($manu >= 85){
        return "A";
     }
}
$bsss = gradeValuuuue($manu);



?>
