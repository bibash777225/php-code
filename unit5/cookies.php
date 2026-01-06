  <?php
  //start the session (must be at very top of the script )
   session_start();

   //set a session variable
   $_SESSION['username']= 'JohnDoe';
    $_SESSION['role'] = 'admin';
echo " Session has been set"."<br>";
echo"username:".$_SESSION['username']."<br>";
echo"Role:".$_SESSION['role'];
?>

