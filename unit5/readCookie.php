<?php

if(isset($_COOKIE['username']))
{
    echo" WELCOME BACK ,".$_COOKIE['username'];

}else{
    echo"Cookie not found .";
}
?>