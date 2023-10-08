<?php
    if(isset($_SESSION['username']))
    { 
        echo("<script>console.log('session verified');</script>");
    }
    elseif(isset($_SESSION['user'])){
            
    }
    else 
    {
        header('location:../HTML/');
    }
?>