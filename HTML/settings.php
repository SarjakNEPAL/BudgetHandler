
<html>
    <?php 
        include('../PHP/globvar.php');
        include("../PHP/seschk.php");
    ?>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/index.css">
        <link rel="icon" type="image/png" href="../Pics/logo.png" sizes="32x32">
        <title>Settings</title>
    </head>
    <body>
        <div class="banner">
            <span class="topban">
                <div class="navbar">
                    <img src="../Pics/logo.png" class="logo"><h1 class="logotxt">Sarjak Budget Helper</h1>
                    <ul>
                        <li><a href="../PHP/logout.php">logout</a></li>
                    </ul>
                </div> 
            </span>
            <div class="content">
                <p>Hello <?php echo($_SESSION['username'])?>!! You are logged in. Your currency is <?php echo($_SESSION['curr']);?>.</p>
                <div class="buttons">
                    <a href="../HTML/settings_2.php"><button type="button"><span class="butt"></span>Change Password</button></a>
                    <a href="../HTML/settings_1.php"><button type="button"><span class="butt"></span>Change currency</button></a>
                    <a href="../HTML/dashboard.php"><button type="button"><span class="butt"></span>Back</button></a>
                </div>
            </div>
        </div>
    </body>
</html>