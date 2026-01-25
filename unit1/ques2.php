<?php



//  date(): simple sate ? time formatting 
echo"<h3>simple fate formating </h3>";
echo" curreny Date :".date('y-m-d'.)."<br>"// output 2023-10-26
current date and time :".date(js F Y H :i:s')" // output 26TH octubaer 2023 


// date time class : powerful date /time manipulation { oop apporch }
echo"<h3>(date time classs object oriented):</h3>"
echo "current date time objext ".$curremt -> format ('F J,Y,G:i a')."</br>"
$futureDate=new DateTime ('2024-01-01');
echo"future date ".$futureDate->format ('F J, Y G')
?> 