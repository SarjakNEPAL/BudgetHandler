<html lang="en">
    <meta charset="utf8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../CSS/indexlg.css">
    <script type="text/javascript" src="../JS/VldRG.js"></script>
    <HEAD><TITLE>SMH</TITLE></HEAD>
    <BODY>
        <div class="banner">
        <span class="topban">
        <div class="navbar">
            <img src="../Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
            <ul>
                <li><a href="../index.html">Home</a></li>
                <li><a href="../HTML/HOME.php">Login</a></li>
                <li><a href="../HTML/Support.html">Support</a></li>
            </ul>
        </div> 
        </span>
        <div class="content">
            <div class="Loginpmp">
                <h1>Register For New Users</h1>
                <h2>Welcome !</h2>
                <p>Please enter your new Username And Password for registration.<br> If you are already registered to this site then please Login.<br> If you face any problem while login/ register, please contact support on the "Support" menu.</p>
             </div> 
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