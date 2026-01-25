 <!-- Write a while loop to keep rolling dice until a 6 appears -->
  <?php

$roll=3;
while($roll!=6){
    $roll=rand(1,6);
    echo"$roll";

if($roll==6){

    echo'<p>you roll a '.$roll.'</p>' ;
}else{
    echo"better luck next time ";
}
}



  ?>