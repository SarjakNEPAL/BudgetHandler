<html lang="en">
    <?php
        include('../PHP/_seschk.php')
    ?>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/indexlg.css">
    <link rel="icon" type="image/png" href="../Pics/logo.png" sizes="32x32">
    <script type="text/javascript" src="../JS/VldRG.js"></script>
    <script type="text/javascript" src="../JS/session_closer.js"></script>
    <HEAD><TITLE>Login</TITLE></HEAD>
    <BODY onbeforeunload="ConfirmClose()" onunload="HandleOnClose()">
        <div class="banner">
            <span class="topban">
                <div class="navbar">
                <img src="../Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../HTML/Support.html">Support</a></li>
                        <li><a href="../HTML/reg.php" >Register</a></li>
                        
                    </ul>
                </div> 
            </span>            
            <span class="loginbox"><center>
                    <form name="regst" onsubmit="return validateForm()" method="post" action="../PHP/USLG.php"><center>
                    <br>Username: <input type="text" id="User" name="User">
                    <br>Password: <input type="password" id="pass" name="pass"><br>
                    <input type="Submit" class="butt" value="Login" name="submit"></center>
                    </form>  </center>
            </span>
         
      </div>
    </BODY>
</html>