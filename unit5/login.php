<?php
session_start();
require 'user.php';


if ($_SERVER['REQUEST_METHOD']=='POST'){


    $username=$_POST['username ']
    $password=$_POST['password']
    $found=false;
    foreach($user as $user){

if($user['username']==$username&& password_verify($password,$user['password'])){

//Authentication successful 
$_SESSION['user_id']=$user['id'];
$_SESSION['username']=$user['username'];
$_SESSION['role']=$user['role']
$found=true;
header('location:dashboard.php');
exit;

}

    }
    if(!$found){
        echo"Invalid username or password"
    }
}
?> 
<form method ="POST">

Username:<intput type="text" name="username" require><br>
Password:<intput type="password"name="password" required><br>
<button type="submit "> Login</button>
</form>