<?php
$grade = $meangrade;
function gradeVaalue($grade){
    if($grade < 34){
        return "E";
    }elseif($grade <= 39 ){
       if($grade >= 35 ){
        return "D-";
       }
    }elseif($grade <= 44 ){
        if($grade >= 40 ){
         return "D";
        }
     }elseif($grade <= 49 ){
        if($grade >= 45 ){
         return "D+";
        }
     }elseif($grade <= 54 ){
        if($grade >= 50 ){
         return "C-";
        }
     }elseif($grade <= 59 ){
        if($grade >= 55 ){
         return "C";
        }
     }elseif($grade <= 64 ){
        if($grade >= 60 ){
         return "C+";
        }
     }elseif($grade <= 69 ){
        if($grade >= 65 ){
         return "B-";
        }
     }elseif($grade <= 74 ){
        if($grade >= 70 ){
         return "B";
        }
     }elseif($grade <= 79 ){
        if($grade >= 75 ){
         return "B+";
        }
     }elseif($grade <= 84 ){
        if($grade >= 80 ){
         return "A-";
        }
     }elseif($grade >= 85){
        return "A";
     }
}
$yoh = gradeVaalue($grade);

?>