<?php
    session_start();
if(isset($_SESSION['username'])){
    $e=$_SESSION['username'];
    $_SESSION['user']=$e;
    }

?>