<html lang="en">
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/indexlg.css">
    <link rel="icon" type="image/png" href="../Pics/logo.png" sizes="32x32">
    <script type="text/javascript" src="../JS/VldRG.js"></script>
    <HEAD><TITLE>Register</TITLE></HEAD>
    <BODY>
        <div class="banner">
        <span class="topban">
        <div class="navbar">
            <img src="../Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="../HTML/HOME.php">Login</a></li>
                <li><a href="../HTML/Support.html">Support</a></li>
            </ul>
        </div> 
        </span>
        <div class="content">
             <span class="loginbox">   
            <form name="regst"  action="../PHP/adduser.php"  onsubmit="return validateForm()" method="post">
            <br>Username: <input type="text" id="User"  name="User">
            <br>Password: <input type="password" id="pass" name="pass"><br>
            <input type="Submit" class="butt" value="Register">
            </form>
        </span>
         </Form>
        </div>
    </span>