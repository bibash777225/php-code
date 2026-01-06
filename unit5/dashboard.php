<?php


session_start();

//redireact to login if not logges in 
if(isset($_SESSION['user_id'])){
    header('location :Login.page');
    exit;
}
echo"welcome,".$_SESSION['username']."!<br>";
//Authorization 

if($_SESSION['role']=='admin'){


    echo"you are admin you can edit and delete content  ";

}else{
    echo"you are regular user limited acces ";
}
?>
<a href="Logout.php">Logout</a>