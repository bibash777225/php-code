<?php
session_start(); //resume the session

if(isset($_SESSION['username']))
{
    echo "Welcome back, " . $_SESSION['username'] . "!";
}
else
{
    echo "Welcome back, " . $_SESSION['username'] . "!";
}
elseif(!isset($_SESSION['username']))
{
    echo "You are not logged in.";
}
?>