<!-- calculate a funcrion  calculatevat ($amount $rate) that return the amount includikng VAT -->


<?php


function CalculateVat($amount,$rate){
    $vat=$amount/$rate;
    echo"vat amont is=$vat <br>";
     echo"total amount is =".$vat+$amount;
}
  CalculateVat(1300,14);
  
?>
