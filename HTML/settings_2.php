<html lang="en">
    <?php
        include('../PHP/globvar.php');
        include('../PHP/_seschk.php');
    ?>
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/indexlg.css">
    <link rel="icon" type="image/png" href="../Pics/logo.png" sizes="32x32">
    <HEAD><TITLE>Settings</TITLE></HEAD>
        <div class="banner">
            <span class="topban">
                <div class="navbar">
                <img src="../Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
                    <ul>
                        <li><a href="../HTML/settings.php" >BACK</a></li>
                        
                    </ul>
                </div> 
            </span>            
            <span class="loginbox"><center>
                <form name="regst" method="post" action="../PHP/chsspss.php">
                    <br>Old Password: <input type="password" id="old_pass" name="old_pass"><br>
                    <br>New Password: <input type="password" id="new_pass" name="new_pass"><br>
                    <br>Confirm Password: <input type="password" id="confirm_pass" name="confirm_pass"><br>
                    <input type="Submit" class="butt" value="Change Password" name="submit">
                </form>  
            </span>
         
      </div>
    </BODY>
</html>