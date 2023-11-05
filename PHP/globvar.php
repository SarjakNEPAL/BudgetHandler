<?php
    session_start();
if(isset($_SESSION['username'])){
    $e=$_SESSION['username'];
    $_SESSION['user']=$e;
    $_SESSION['username']=$_SESSION['user'];
}


if(isset($_SESSION['curr'])){
    $a=$_SESSION['curr'];
    $_SESSION['curr']=$a;
}


?>