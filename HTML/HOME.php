<html lang="en">
    <?php
        include('../PHP/_seschk.php')
    ?>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/indexlg.css">
    <script type="text/javascript" src="../JS/VldRG.js"></script>
    <script type="text/javascript" src="../JS/session_closer.js"></script>
    <HEAD><TITLE>SMH</TITLE></HEAD>
    <BODY onbeforeunload="ConfirmClose()" onunload="HandleOnClose()">
        <div class="banner">
            <span class="topban">
                <div class="navbar">
                <img src="../Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../HTML/reg.php">Register</a></li>
                        <li><a href="../HTML/Support.html">Support</a></li>
                    </ul>
                </div> 
            </span>
            <div class="content">
                <div class="Loginpmp">
                    <h1>Login For Existing Users</h1>
                    <h2>Welcome Back!</h2>
                    <p>Please enter your registered Username And Password.<br> If you are new to this site then please register.<br> If you face any problem while login/ register, please contact support on the "Support" menu.</p>
                </div>      
                <span class="loginbox">
                    <form name="regst" onsubmit="return validateForm()" method="post" action="../PHP/USLG.php">
                    <br>Username: <input type="text" id="User" name="User">
                    <br>Password: <input type="password" id="pass" name="pass"><br>
                    <input type="Submit" class="butt" value="Login" name="submit">
                    </form>  
                </span>
            </div>
        </div>
    </BODY>
</html>