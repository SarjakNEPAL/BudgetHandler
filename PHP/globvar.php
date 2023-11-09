<?php
    session_start();
if(isset($_SESSION['username'])){
    $e=$_SESSION['username'];
    $_SESSION['user']=$e;
    $_SESSION['username']=$_SESSION['user'];
}


if(isset($_SESSION['curr'])){
    switch ($_SESSION['curr']){
        case "usd":
          $_SESSION['curr']="$";
          break;
        case "eur":
          $_SESSION['curr']="€";
          break;
        case "jpy":
          $_SESSION['curr']="¥";
          break;     
        case "gbp":
          $_SESSION['curr']="£";
          break;
        case "npr":
          $_SESSION['curr']="रू";
          break;
        case "inr":
          $_SESSION['curr']="₹";
          break; 
      }
    $a=$_SESSION['curr'];
    $_SESSION['curr']=$a;
}


?>