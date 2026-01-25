<!-- 2.3 Use elseif to grade a score: A (≥90), B (≥75), C (≥60), F (else). -->
 <?php
$a=95;

if($a>=90){
    echo"grade A+";
}
elseif($a<=75){
    echo"grade A";
}
elseif($a<=60){
    echo"grade B+";
}
else{
    echo"grade F+";
}
 ?>