            <!-- 2.5 Use a switch to display the day of the week based on a number (1–7). -->
<?php

$a=4;
switch($a){
    case 1:
        echo"sunday";
        break;
         case 2:
        echo"monday";
         break;
         case 3:
        echo"tue";
         break;
         case 4:
        echo"wed";
         break;
         case 5:
        echo"thur";
         break;
         case 6:
        echo"fri";
         break;
        case 7:
        echo"satir";
   default:
   echo"invalid" ;
}


?>